// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function (mod) {
  if (typeof exports == "object" && typeof module == "object")
    // CommonJS
    mod(require("../../lib/codemirror"));
  else if (typeof define == "function" && define.amd)
    // AMD
    define(["../../lib/codemirror"], mod);
  // Plain browser env
  else mod(CodeMirror);
})(function (CodeMirror) {
  "use strict";

  CodeMirror.defineMode("gas", function (_config, parserConfig) {
    "use strict";

    // If an architecture is specified, its initialization function may
    // populate this array with custom parsing functions which will be
    // tried in the event that the standard functions do not find a match.
    var custom = [];

    // The symbol used to start a line comment changes based on the target
    // architecture.
    // If no architecture is pased in "parserConfig" then only multiline
    // comments will have syntax support.
    var lineCommentStartSymbol = "";

    // These directives are architecture independent.
    // Machine specific directives should go in their respective
    // architecture initialization function.
    // Reference:
    // http://sourceware.org/binutils/docs/as/Pseudo-Ops.html#Pseudo-Ops
    var directives = {
      ".abort": "builtin",
      ".align": "builtin",
      ".altmacro": "builtin",
      ".ascii": "builtin",
      ".asciz": "builtin",
      ".balign": "builtin",
      ".balignw": "builtin",
      ".balignl": "builtin",
      ".bundle_align_mode": "builtin",
      ".bundle_lock": "builtin",
      ".bundle_unlock": "builtin",
      ".byte": "builtin",
      ".cfi_startproc": "builtin",
      ".comm": "builtin",
      ".data": "builtin",
      ".def": "builtin",
      ".desc": "builtin",
      ".dim": "builtin",
      ".double": "builtin",
      ".eject": "builtin",
      ".else": "builtin",
      ".elseif": "builtin",
      ".end": "builtin",
      ".endef": "builtin",
      ".endfunc": "builtin",
      ".endif": "builtin",
      ".equ": "builtin",
      ".equiv": "builtin",
      ".eqv": "builtin",
      ".err": "builtin",
      ".error": "builtin",
      ".exitm": "builtin",
      ".extern": "builtin",
      ".fail": "builtin",
      ".file": "builtin",
      ".fill": "builtin",
      ".float": "builtin",
      ".func": "builtin",
      ".global": "builtin",
      ".gnu_attribute": "builtin",
      ".hidden": "builtin",
      ".hword": "builtin",
      ".ident": "builtin",
      ".if": "builtin",
      ".incbin": "builtin",
      ".include": "builtin",
      ".int": "builtin",
      ".internal": "builtin",
      ".irp": "builtin",
      ".irpc": "builtin",
      ".lcomm": "builtin",
      ".lflags": "builtin",
      ".line": "builtin",
      ".linkonce": "builtin",
      ".list": "builtin",
      ".ln": "builtin",
      ".loc": "builtin",
      ".loc_mark_labels": "builtin",
      ".local": "builtin",
      ".long": "builtin",
      ".macro": "builtin",
      ".mri": "builtin",
      ".noaltmacro": "builtin",
      ".nolist": "builtin",
      ".octa": "builtin",
      ".offset": "builtin",
      ".org": "builtin",
      ".p2align": "builtin",
      ".popsection": "builtin",
      ".previous": "builtin",
      ".print": "builtin",
      ".protected": "builtin",
      ".psize": "builtin",
      ".purgem": "builtin",
      ".pushsection": "builtin",
      ".quad": "builtin",
      ".reloc": "builtin",
      ".rept": "builtin",
      ".sbttl": "builtin",
      ".scl": "builtin",
      ".section": "builtin",
      ".set": "builtin",
      ".short": "builtin",
      ".single": "builtin",
      ".size": "builtin",
      ".skip": "builtin",
      ".sleb128": "builtin",
      ".space": "builtin",
      ".stab": "builtin",
      ".string": "builtin",
      ".struct": "builtin",
      ".subsection": "builtin",
      ".symver": "builtin",
      ".tag": "builtin",
      ".text": "builtin",
      ".title": "builtin",
      ".type": "builtin",
      ".uleb128": "builtin",
      ".val": "builtin",
      ".version": "builtin",
      ".vtable_entry": "builtin",
      ".vtable_inherit": "builtin",
      ".warning": "builtin",
      ".weak": "builtin",
      ".weakref": "builtin",
      ".word": "builtin",
    };

    var registers = {};

    function x86(_parserConfig) {
      lineCommentStartSymbol = "#";

      registers.al = "vArialble";
      registers.ah = "vArialble";
      registers.ax = "vArialble";
      registers.eax = "vArialble-2";
      registers.rax = "vArialble-3";

      registers.bl = "vArialble";
      registers.bh = "vArialble";
      registers.bx = "vArialble";
      registers.ebx = "vArialble-2";
      registers.rbx = "vArialble-3";

      registers.cl = "vArialble";
      registers.ch = "vArialble";
      registers.cx = "vArialble";
      registers.ecx = "vArialble-2";
      registers.rcx = "vArialble-3";

      registers.dl = "vArialble";
      registers.dh = "vArialble";
      registers.dx = "vArialble";
      registers.edx = "vArialble-2";
      registers.rdx = "vArialble-3";

      registers.si = "vArialble";
      registers.esi = "vArialble-2";
      registers.rsi = "vArialble-3";

      registers.di = "vArialble";
      registers.edi = "vArialble-2";
      registers.rdi = "vArialble-3";

      registers.sp = "vArialble";
      registers.esp = "vArialble-2";
      registers.rsp = "vArialble-3";

      registers.bp = "vArialble";
      registers.ebp = "vArialble-2";
      registers.rbp = "vArialble-3";

      registers.ip = "vArialble";
      registers.eip = "vArialble-2";
      registers.rip = "vArialble-3";

      registers.cs = "keyword";
      registers.ds = "keyword";
      registers.ss = "keyword";
      registers.es = "keyword";
      registers.fs = "keyword";
      registers.gs = "keyword";
    }

    function armv6(_parserConfig) {
      // Reference:
      // http://infocenter.arm.com/help/topic/com.arm.doc.qrc0001l/QRC0001_UAL.pdf
      // http://infocenter.arm.com/help/topic/com.arm.doc.ddi0301h/DDI0301H_arm1176jzfs_r0p7_trm.pdf
      lineCommentStartSymbol = "@";
      directives.syntax = "builtin";

      registers.r0 = "vArialble";
      registers.r1 = "vArialble";
      registers.r2 = "vArialble";
      registers.r3 = "vArialble";
      registers.r4 = "vArialble";
      registers.r5 = "vArialble";
      registers.r6 = "vArialble";
      registers.r7 = "vArialble";
      registers.r8 = "vArialble";
      registers.r9 = "vArialble";
      registers.r10 = "vArialble";
      registers.r11 = "vArialble";
      registers.r12 = "vArialble";

      registers.sp = "vArialble-2";
      registers.lr = "vArialble-2";
      registers.pc = "vArialble-2";
      registers.r13 = registers.sp;
      registers.r14 = registers.lr;
      registers.r15 = registers.pc;

      custom.push(function (ch, stream) {
        if (ch === "#") {
          stream.eatWhile(/\w/);
          return "number";
        }
      });
    }

    var arch = (parserConfig.architecture || "x86").toLowerCase();
    if (arch === "x86") {
      x86(parserConfig);
    } else if (arch === "arm" || arch === "armv6") {
      armv6(parserConfig);
    }

    function nextUntilUnescaped(stream, end) {
      var escaped = false,
        next;
      while ((next = stream.next()) != null) {
        if (next === end && !escaped) {
          return false;
        }
        escaped = !escaped && next === "\\";
      }
      return escaped;
    }

    function clikeComment(stream, state) {
      var maybeEnd = false,
        ch;
      while ((ch = stream.next()) != null) {
        if (ch === "/" && maybeEnd) {
          state.tokenize = null;
          break;
        }
        maybeEnd = ch === "*";
      }
      return "comment";
    }

    return {
      startState: function () {
        return {
          tokenize: null,
        };
      },

      token: function (stream, state) {
        if (state.tokenize) {
          return state.tokenize(stream, state);
        }

        if (stream.eatSpace()) {
          return null;
        }

        var style,
          cur,
          ch = stream.next();

        if (ch === "/") {
          if (stream.eat("*")) {
            state.tokenize = clikeComment;
            return clikeComment(stream, state);
          }
        }

        if (ch === lineCommentStartSymbol) {
          stream.skipToEnd();
          return "comment";
        }

        if (ch === '"') {
          nextUntilUnescaped(stream, '"');
          return "string";
        }

        if (ch === ".") {
          stream.eatWhile(/\w/);
          cur = stream.current().toLowerCase();
          style = directives[cur];
          return style || null;
        }

        if (ch === "=") {
          stream.eatWhile(/\w/);
          return "tag";
        }

        if (ch === "{") {
          return "bracket";
        }

        if (ch === "}") {
          return "bracket";
        }

        if (/\d/.test(ch)) {
          if (ch === "0" && stream.eat("x")) {
            stream.eatWhile(/[0-9a-fA-F]/);
            return "number";
          }
          stream.eatWhile(/\d/);
          return "number";
        }

        if (/\w/.test(ch)) {
          stream.eatWhile(/\w/);
          if (stream.eat(":")) {
            return "tag";
          }
          cur = stream.current().toLowerCase();
          style = registers[cur];
          return style || null;
        }

        for (var i = 0; i < custom.length; i++) {
          style = custom[i](ch, stream, state);
          if (style) {
            return style;
          }
        }
      },

      lineComment: lineCommentStartSymbol,
      blockCommentStart: "/*",
      blockCommentEnd: "*/",
    };
  });
});
