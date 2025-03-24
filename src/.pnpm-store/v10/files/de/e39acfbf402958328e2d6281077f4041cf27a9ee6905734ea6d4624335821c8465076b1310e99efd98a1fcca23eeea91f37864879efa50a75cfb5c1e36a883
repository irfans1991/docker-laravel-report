import { reactive as Qs, onBeforeMount as eo, onBeforeUnmount as to, defineComponent as S, computed as c, createElementBlock as b, openBlock as p, normalizeClass as C, unref as x, renderSlot as k, ref as R, onMounted as je, createCommentVNode as z, createElementVNode as m, watch as Le, useAttrs as ie, mergeProps as te, useSlots as Ye, toRefs as J, toDisplayString as O, createBlock as W, resolveDynamicComponent as re, withCtx as D, resolveComponent as ye, normalizeProps as Ae, Fragment as K, renderList as Ee, withModifiers as xt, readonly as ro, toValue as Q, getCurrentScope as so, onScopeDispose as oo, isRef as or, nextTick as Ft, getCurrentInstance as Bt, hasInjectionContext as as, inject as ee, shallowRef as no, watchEffect as ao, createTextVNode as ne, Comment as lo, createVNode as Ie, Transition as ls, normalizeStyle as st, withKeys as is, provide as ce, withDirectives as Fe, vShow as io, toRef as Ct, guardReactiveProps as ds, h as ht, TransitionGroup as uo, pushScopeId as co, popScopeId as fo, withScopeId as po, vModelCheckbox as us, vModelDynamic as go, vModelRadio as ho, vModelText as cs, vModelSelect as mo } from "vue";
const bo = "useandom-26T198340PX75pxJACKVERYMINDBUSHWOLF_GQZbfghjklqvwyzrict";
let fs = (e = 21) => {
  let t = "", r = crypto.getRandomValues(new Uint8Array(e |= 0));
  for (; e--; )
    t += bo[r[e] & 63];
  return t;
};
const mt = Qs({}), Mt = (e, t) => (eo(() => {
  e && (mt[e] = {
    id: e,
    collapsed: t?.collapsed ?? !1,
    flushed: t?.flushed ?? !1,
    persistent: t?.persistent ?? !1,
    panels: []
  });
}), to(() => {
  e && delete mt[e];
}), {
  accordionStates: mt,
  getAccordionState: ({ element: o }) => {
    const n = o.value && o.value.closest("[data-accordion-id]")?.dataset.accordionId;
    return n ? mt[n] : null;
  },
  getAccordionPanelState: ({ accordionState: o, panelId: n }) => o?.value.panels.find((l) => l.id === n) ?? null
}), nr = "-", vo = (e) => {
  const t = wo(e), {
    conflictingClassGroups: r,
    conflictingClassGroupModifiers: s
  } = e;
  return {
    getClassGroupId: (l) => {
      const a = l.split(nr);
      return a[0] === "" && a.length !== 1 && a.shift(), ps(a, t) || yo(l);
    },
    getConflictingClassGroupIds: (l, a) => {
      const i = r[l] || [];
      return a && s[l] ? [...i, ...s[l]] : i;
    }
  };
}, ps = (e, t) => {
  if (e.length === 0)
    return t.classGroupId;
  const r = e[0], s = t.nextPart.get(r), o = s ? ps(e.slice(1), s) : void 0;
  if (o)
    return o;
  if (t.validators.length === 0)
    return;
  const n = e.join(nr);
  return t.validators.find(({
    validator: l
  }) => l(n))?.classGroupId;
}, yr = /^\[(.+)\]$/, yo = (e) => {
  if (yr.test(e)) {
    const t = yr.exec(e)[1], r = t?.substring(0, t.indexOf(":"));
    if (r)
      return "arbitrary.." + r;
  }
}, wo = (e) => {
  const {
    theme: t,
    prefix: r
  } = e, s = {
    nextPart: /* @__PURE__ */ new Map(),
    validators: []
  };
  return ko(Object.entries(e.classGroups), r).forEach(([n, l]) => {
    Xt(l, s, n, t);
  }), s;
}, Xt = (e, t, r, s) => {
  e.forEach((o) => {
    if (typeof o == "string") {
      const n = o === "" ? t : wr(t, o);
      n.classGroupId = r;
      return;
    }
    if (typeof o == "function") {
      if (xo(o)) {
        Xt(o(s), t, r, s);
        return;
      }
      t.validators.push({
        validator: o,
        classGroupId: r
      });
      return;
    }
    Object.entries(o).forEach(([n, l]) => {
      Xt(l, wr(t, n), r, s);
    });
  });
}, wr = (e, t) => {
  let r = e;
  return t.split(nr).forEach((s) => {
    r.nextPart.has(s) || r.nextPart.set(s, {
      nextPart: /* @__PURE__ */ new Map(),
      validators: []
    }), r = r.nextPart.get(s);
  }), r;
}, xo = (e) => e.isThemeGetter, ko = (e, t) => t ? e.map(([r, s]) => {
  const o = s.map((n) => typeof n == "string" ? t + n : typeof n == "object" ? Object.fromEntries(Object.entries(n).map(([l, a]) => [t + l, a])) : n);
  return [r, o];
}) : e, Co = (e) => {
  if (e < 1)
    return {
      get: () => {
      },
      set: () => {
      }
    };
  let t = 0, r = /* @__PURE__ */ new Map(), s = /* @__PURE__ */ new Map();
  const o = (n, l) => {
    r.set(n, l), t++, t > e && (t = 0, s = r, r = /* @__PURE__ */ new Map());
  };
  return {
    get(n) {
      let l = r.get(n);
      if (l !== void 0)
        return l;
      if ((l = s.get(n)) !== void 0)
        return o(n, l), l;
    },
    set(n, l) {
      r.has(n) ? r.set(n, l) : o(n, l);
    }
  };
}, gs = "!", _o = (e) => {
  const {
    separator: t,
    experimentalParseClassName: r
  } = e, s = t.length === 1, o = t[0], n = t.length, l = (a) => {
    const i = [];
    let d = 0, u = 0, h;
    for (let w = 0; w < a.length; w++) {
      let $ = a[w];
      if (d === 0) {
        if ($ === o && (s || a.slice(w, w + n) === t)) {
          i.push(a.slice(u, w)), u = w + n;
          continue;
        }
        if ($ === "/") {
          h = w;
          continue;
        }
      }
      $ === "[" ? d++ : $ === "]" && d--;
    }
    const y = i.length === 0 ? a : a.substring(u), f = y.startsWith(gs), g = f ? y.substring(1) : y, v = h && h > u ? h - u : void 0;
    return {
      modifiers: i,
      hasImportantModifier: f,
      baseClassName: g,
      maybePostfixModifierPosition: v
    };
  };
  return r ? (a) => r({
    className: a,
    parseClassName: l
  }) : l;
}, $o = (e) => {
  if (e.length <= 1)
    return e;
  const t = [];
  let r = [];
  return e.forEach((s) => {
    s[0] === "[" ? (t.push(...r.sort(), s), r = []) : r.push(s);
  }), t.push(...r.sort()), t;
}, So = (e) => ({
  cache: Co(e.cacheSize),
  parseClassName: _o(e),
  ...vo(e)
}), To = /\s+/, zo = (e, t) => {
  const {
    parseClassName: r,
    getClassGroupId: s,
    getConflictingClassGroupIds: o
  } = t, n = [], l = e.trim().split(To);
  let a = "";
  for (let i = l.length - 1; i >= 0; i -= 1) {
    const d = l[i], {
      modifiers: u,
      hasImportantModifier: h,
      baseClassName: y,
      maybePostfixModifierPosition: f
    } = r(d);
    let g = !!f, v = s(g ? y.substring(0, f) : y);
    if (!v) {
      if (!g) {
        a = d + (a.length > 0 ? " " + a : a);
        continue;
      }
      if (v = s(y), !v) {
        a = d + (a.length > 0 ? " " + a : a);
        continue;
      }
      g = !1;
    }
    const w = $o(u).join(":"), $ = h ? w + gs : w, T = $ + v;
    if (n.includes(T))
      continue;
    n.push(T);
    const P = o(v, g);
    for (let M = 0; M < P.length; ++M) {
      const _ = P[M];
      n.push($ + _);
    }
    a = d + (a.length > 0 ? " " + a : a);
  }
  return a;
};
function Po() {
  let e = 0, t, r, s = "";
  for (; e < arguments.length; )
    (t = arguments[e++]) && (r = hs(t)) && (s && (s += " "), s += r);
  return s;
}
const hs = (e) => {
  if (typeof e == "string")
    return e;
  let t, r = "";
  for (let s = 0; s < e.length; s++)
    e[s] && (t = hs(e[s])) && (r && (r += " "), r += t);
  return r;
};
function Ao(e, ...t) {
  let r, s, o, n = l;
  function l(i) {
    const d = t.reduce((u, h) => h(u), e());
    return r = So(d), s = r.cache.get, o = r.cache.set, n = a, a(i);
  }
  function a(i) {
    const d = s(i);
    if (d)
      return d;
    const u = zo(i, r);
    return o(i, u), u;
  }
  return function() {
    return n(Po.apply(null, arguments));
  };
}
const V = (e) => {
  const t = (r) => r[e] || [];
  return t.isThemeGetter = !0, t;
}, ms = /^\[(?:([a-z-]+):)?(.+)\]$/i, Fo = /^\d+\/\d+$/, Bo = /* @__PURE__ */ new Set(["px", "full", "screen"]), Mo = /^(\d+(\.\d+)?)?(xs|sm|md|lg|xl)$/, Io = /\d+(%|px|r?em|[sdl]?v([hwib]|min|max)|pt|pc|in|cm|mm|cap|ch|ex|r?lh|cq(w|h|i|b|min|max))|\b(calc|min|max|clamp)\(.+\)|^0$/, Oo = /^(rgba?|hsla?|hwb|(ok)?(lab|lch))\(.+\)$/, Lo = /^(inset_)?-?((\d+)?\.?(\d+)[a-z]+|0)_-?((\d+)?\.?(\d+)[a-z]+|0)/, Eo = /^(url|image|image-set|cross-fade|element|(repeating-)?(linear|radial|conic)-gradient)\(.+\)$/, be = (e) => qe(e) || Bo.has(e) || Fo.test(e), xe = (e) => Ke(e, "length", Go), qe = (e) => !!e && !Number.isNaN(Number(e)), Dt = (e) => Ke(e, "number", qe), Ze = (e) => !!e && Number.isInteger(Number(e)), Ro = (e) => e.endsWith("%") && qe(e.slice(0, -1)), F = (e) => ms.test(e), ke = (e) => Mo.test(e), No = /* @__PURE__ */ new Set(["length", "size", "percentage"]), jo = (e) => Ke(e, No, bs), Vo = (e) => Ke(e, "position", bs), Do = /* @__PURE__ */ new Set(["image", "url"]), Ho = (e) => Ke(e, Do, Uo), Wo = (e) => Ke(e, "", qo), Qe = () => !0, Ke = (e, t, r) => {
  const s = ms.exec(e);
  return s ? s[1] ? typeof t == "string" ? s[1] === t : t.has(s[1]) : r(s[2]) : !1;
}, Go = (e) => (
  // `colorFunctionRegex` check is necessary because color functions can have percentages in them which which would be incorrectly classified as lengths.
  // For example, `hsl(0 0% 0%)` would be classified as a length without this check.
  // I could also use lookbehind assertion in `lengthUnitRegex` but that isn't supported widely enough.
  Io.test(e) && !Oo.test(e)
), bs = () => !1, qo = (e) => Lo.test(e), Uo = (e) => Eo.test(e), Yo = () => {
  const e = V("colors"), t = V("spacing"), r = V("blur"), s = V("brightness"), o = V("borderColor"), n = V("borderRadius"), l = V("borderSpacing"), a = V("borderWidth"), i = V("contrast"), d = V("grayscale"), u = V("hueRotate"), h = V("invert"), y = V("gap"), f = V("gradientColorStops"), g = V("gradientColorStopPositions"), v = V("inset"), w = V("margin"), $ = V("opacity"), T = V("padding"), P = V("saturate"), M = V("scale"), _ = V("sepia"), I = V("skew"), A = V("space"), N = V("translate"), G = () => ["auto", "contain", "none"], j = () => ["auto", "hidden", "clip", "visible", "scroll"], Y = () => ["auto", F, t], B = () => [F, t], se = () => ["", be, xe], q = () => ["auto", qe, F], he = () => ["bottom", "center", "left", "left-bottom", "left-top", "right", "right-bottom", "right-top", "top"], X = () => ["solid", "dashed", "dotted", "double", "none"], oe = () => ["normal", "multiply", "screen", "overlay", "darken", "lighten", "color-dodge", "color-burn", "hard-light", "soft-light", "difference", "exclusion", "hue", "saturation", "color", "luminosity"], ae = () => ["start", "end", "center", "between", "around", "evenly", "stretch"], Z = () => ["", "0", F], gt = () => ["auto", "avoid", "all", "avoid-page", "page", "left", "right", "column"], me = () => [qe, F];
  return {
    cacheSize: 500,
    separator: ":",
    theme: {
      colors: [Qe],
      spacing: [be, xe],
      blur: ["none", "", ke, F],
      brightness: me(),
      borderColor: [e],
      borderRadius: ["none", "", "full", ke, F],
      borderSpacing: B(),
      borderWidth: se(),
      contrast: me(),
      grayscale: Z(),
      hueRotate: me(),
      invert: Z(),
      gap: B(),
      gradientColorStops: [e],
      gradientColorStopPositions: [Ro, xe],
      inset: Y(),
      margin: Y(),
      opacity: me(),
      padding: B(),
      saturate: me(),
      scale: me(),
      sepia: Z(),
      skew: me(),
      space: B(),
      translate: B()
    },
    classGroups: {
      // Layout
      /**
       * Aspect Ratio
       * @see https://tailwindcss.com/docs/aspect-ratio
       */
      aspect: [{
        aspect: ["auto", "square", "video", F]
      }],
      /**
       * Container
       * @see https://tailwindcss.com/docs/container
       */
      container: ["container"],
      /**
       * Columns
       * @see https://tailwindcss.com/docs/columns
       */
      columns: [{
        columns: [ke]
      }],
      /**
       * Break After
       * @see https://tailwindcss.com/docs/break-after
       */
      "break-after": [{
        "break-after": gt()
      }],
      /**
       * Break Before
       * @see https://tailwindcss.com/docs/break-before
       */
      "break-before": [{
        "break-before": gt()
      }],
      /**
       * Break Inside
       * @see https://tailwindcss.com/docs/break-inside
       */
      "break-inside": [{
        "break-inside": ["auto", "avoid", "avoid-page", "avoid-column"]
      }],
      /**
       * Box Decoration Break
       * @see https://tailwindcss.com/docs/box-decoration-break
       */
      "box-decoration": [{
        "box-decoration": ["slice", "clone"]
      }],
      /**
       * Box Sizing
       * @see https://tailwindcss.com/docs/box-sizing
       */
      box: [{
        box: ["border", "content"]
      }],
      /**
       * Display
       * @see https://tailwindcss.com/docs/display
       */
      display: ["block", "inline-block", "inline", "flex", "inline-flex", "table", "inline-table", "table-caption", "table-cell", "table-column", "table-column-group", "table-footer-group", "table-header-group", "table-row-group", "table-row", "flow-root", "grid", "inline-grid", "contents", "list-item", "hidden"],
      /**
       * Floats
       * @see https://tailwindcss.com/docs/float
       */
      float: [{
        float: ["right", "left", "none", "start", "end"]
      }],
      /**
       * Clear
       * @see https://tailwindcss.com/docs/clear
       */
      clear: [{
        clear: ["left", "right", "both", "none", "start", "end"]
      }],
      /**
       * Isolation
       * @see https://tailwindcss.com/docs/isolation
       */
      isolation: ["isolate", "isolation-auto"],
      /**
       * Object Fit
       * @see https://tailwindcss.com/docs/object-fit
       */
      "object-fit": [{
        object: ["contain", "cover", "fill", "none", "scale-down"]
      }],
      /**
       * Object Position
       * @see https://tailwindcss.com/docs/object-position
       */
      "object-position": [{
        object: [...he(), F]
      }],
      /**
       * Overflow
       * @see https://tailwindcss.com/docs/overflow
       */
      overflow: [{
        overflow: j()
      }],
      /**
       * Overflow X
       * @see https://tailwindcss.com/docs/overflow
       */
      "overflow-x": [{
        "overflow-x": j()
      }],
      /**
       * Overflow Y
       * @see https://tailwindcss.com/docs/overflow
       */
      "overflow-y": [{
        "overflow-y": j()
      }],
      /**
       * Overscroll Behavior
       * @see https://tailwindcss.com/docs/overscroll-behavior
       */
      overscroll: [{
        overscroll: G()
      }],
      /**
       * Overscroll Behavior X
       * @see https://tailwindcss.com/docs/overscroll-behavior
       */
      "overscroll-x": [{
        "overscroll-x": G()
      }],
      /**
       * Overscroll Behavior Y
       * @see https://tailwindcss.com/docs/overscroll-behavior
       */
      "overscroll-y": [{
        "overscroll-y": G()
      }],
      /**
       * Position
       * @see https://tailwindcss.com/docs/position
       */
      position: ["static", "fixed", "absolute", "relative", "sticky"],
      /**
       * Top / Right / Bottom / Left
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      inset: [{
        inset: [v]
      }],
      /**
       * Right / Left
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      "inset-x": [{
        "inset-x": [v]
      }],
      /**
       * Top / Bottom
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      "inset-y": [{
        "inset-y": [v]
      }],
      /**
       * Start
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      start: [{
        start: [v]
      }],
      /**
       * End
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      end: [{
        end: [v]
      }],
      /**
       * Top
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      top: [{
        top: [v]
      }],
      /**
       * Right
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      right: [{
        right: [v]
      }],
      /**
       * Bottom
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      bottom: [{
        bottom: [v]
      }],
      /**
       * Left
       * @see https://tailwindcss.com/docs/top-right-bottom-left
       */
      left: [{
        left: [v]
      }],
      /**
       * Visibility
       * @see https://tailwindcss.com/docs/visibility
       */
      visibility: ["visible", "invisible", "collapse"],
      /**
       * Z-Index
       * @see https://tailwindcss.com/docs/z-index
       */
      z: [{
        z: ["auto", Ze, F]
      }],
      // Flexbox and Grid
      /**
       * Flex Basis
       * @see https://tailwindcss.com/docs/flex-basis
       */
      basis: [{
        basis: Y()
      }],
      /**
       * Flex Direction
       * @see https://tailwindcss.com/docs/flex-direction
       */
      "flex-direction": [{
        flex: ["row", "row-reverse", "col", "col-reverse"]
      }],
      /**
       * Flex Wrap
       * @see https://tailwindcss.com/docs/flex-wrap
       */
      "flex-wrap": [{
        flex: ["wrap", "wrap-reverse", "nowrap"]
      }],
      /**
       * Flex
       * @see https://tailwindcss.com/docs/flex
       */
      flex: [{
        flex: ["1", "auto", "initial", "none", F]
      }],
      /**
       * Flex Grow
       * @see https://tailwindcss.com/docs/flex-grow
       */
      grow: [{
        grow: Z()
      }],
      /**
       * Flex Shrink
       * @see https://tailwindcss.com/docs/flex-shrink
       */
      shrink: [{
        shrink: Z()
      }],
      /**
       * Order
       * @see https://tailwindcss.com/docs/order
       */
      order: [{
        order: ["first", "last", "none", Ze, F]
      }],
      /**
       * Grid Template Columns
       * @see https://tailwindcss.com/docs/grid-template-columns
       */
      "grid-cols": [{
        "grid-cols": [Qe]
      }],
      /**
       * Grid Column Start / End
       * @see https://tailwindcss.com/docs/grid-column
       */
      "col-start-end": [{
        col: ["auto", {
          span: ["full", Ze, F]
        }, F]
      }],
      /**
       * Grid Column Start
       * @see https://tailwindcss.com/docs/grid-column
       */
      "col-start": [{
        "col-start": q()
      }],
      /**
       * Grid Column End
       * @see https://tailwindcss.com/docs/grid-column
       */
      "col-end": [{
        "col-end": q()
      }],
      /**
       * Grid Template Rows
       * @see https://tailwindcss.com/docs/grid-template-rows
       */
      "grid-rows": [{
        "grid-rows": [Qe]
      }],
      /**
       * Grid Row Start / End
       * @see https://tailwindcss.com/docs/grid-row
       */
      "row-start-end": [{
        row: ["auto", {
          span: [Ze, F]
        }, F]
      }],
      /**
       * Grid Row Start
       * @see https://tailwindcss.com/docs/grid-row
       */
      "row-start": [{
        "row-start": q()
      }],
      /**
       * Grid Row End
       * @see https://tailwindcss.com/docs/grid-row
       */
      "row-end": [{
        "row-end": q()
      }],
      /**
       * Grid Auto Flow
       * @see https://tailwindcss.com/docs/grid-auto-flow
       */
      "grid-flow": [{
        "grid-flow": ["row", "col", "dense", "row-dense", "col-dense"]
      }],
      /**
       * Grid Auto Columns
       * @see https://tailwindcss.com/docs/grid-auto-columns
       */
      "auto-cols": [{
        "auto-cols": ["auto", "min", "max", "fr", F]
      }],
      /**
       * Grid Auto Rows
       * @see https://tailwindcss.com/docs/grid-auto-rows
       */
      "auto-rows": [{
        "auto-rows": ["auto", "min", "max", "fr", F]
      }],
      /**
       * Gap
       * @see https://tailwindcss.com/docs/gap
       */
      gap: [{
        gap: [y]
      }],
      /**
       * Gap X
       * @see https://tailwindcss.com/docs/gap
       */
      "gap-x": [{
        "gap-x": [y]
      }],
      /**
       * Gap Y
       * @see https://tailwindcss.com/docs/gap
       */
      "gap-y": [{
        "gap-y": [y]
      }],
      /**
       * Justify Content
       * @see https://tailwindcss.com/docs/justify-content
       */
      "justify-content": [{
        justify: ["normal", ...ae()]
      }],
      /**
       * Justify Items
       * @see https://tailwindcss.com/docs/justify-items
       */
      "justify-items": [{
        "justify-items": ["start", "end", "center", "stretch"]
      }],
      /**
       * Justify Self
       * @see https://tailwindcss.com/docs/justify-self
       */
      "justify-self": [{
        "justify-self": ["auto", "start", "end", "center", "stretch"]
      }],
      /**
       * Align Content
       * @see https://tailwindcss.com/docs/align-content
       */
      "align-content": [{
        content: ["normal", ...ae(), "baseline"]
      }],
      /**
       * Align Items
       * @see https://tailwindcss.com/docs/align-items
       */
      "align-items": [{
        items: ["start", "end", "center", "baseline", "stretch"]
      }],
      /**
       * Align Self
       * @see https://tailwindcss.com/docs/align-self
       */
      "align-self": [{
        self: ["auto", "start", "end", "center", "stretch", "baseline"]
      }],
      /**
       * Place Content
       * @see https://tailwindcss.com/docs/place-content
       */
      "place-content": [{
        "place-content": [...ae(), "baseline"]
      }],
      /**
       * Place Items
       * @see https://tailwindcss.com/docs/place-items
       */
      "place-items": [{
        "place-items": ["start", "end", "center", "baseline", "stretch"]
      }],
      /**
       * Place Self
       * @see https://tailwindcss.com/docs/place-self
       */
      "place-self": [{
        "place-self": ["auto", "start", "end", "center", "stretch"]
      }],
      // Spacing
      /**
       * Padding
       * @see https://tailwindcss.com/docs/padding
       */
      p: [{
        p: [T]
      }],
      /**
       * Padding X
       * @see https://tailwindcss.com/docs/padding
       */
      px: [{
        px: [T]
      }],
      /**
       * Padding Y
       * @see https://tailwindcss.com/docs/padding
       */
      py: [{
        py: [T]
      }],
      /**
       * Padding Start
       * @see https://tailwindcss.com/docs/padding
       */
      ps: [{
        ps: [T]
      }],
      /**
       * Padding End
       * @see https://tailwindcss.com/docs/padding
       */
      pe: [{
        pe: [T]
      }],
      /**
       * Padding Top
       * @see https://tailwindcss.com/docs/padding
       */
      pt: [{
        pt: [T]
      }],
      /**
       * Padding Right
       * @see https://tailwindcss.com/docs/padding
       */
      pr: [{
        pr: [T]
      }],
      /**
       * Padding Bottom
       * @see https://tailwindcss.com/docs/padding
       */
      pb: [{
        pb: [T]
      }],
      /**
       * Padding Left
       * @see https://tailwindcss.com/docs/padding
       */
      pl: [{
        pl: [T]
      }],
      /**
       * Margin
       * @see https://tailwindcss.com/docs/margin
       */
      m: [{
        m: [w]
      }],
      /**
       * Margin X
       * @see https://tailwindcss.com/docs/margin
       */
      mx: [{
        mx: [w]
      }],
      /**
       * Margin Y
       * @see https://tailwindcss.com/docs/margin
       */
      my: [{
        my: [w]
      }],
      /**
       * Margin Start
       * @see https://tailwindcss.com/docs/margin
       */
      ms: [{
        ms: [w]
      }],
      /**
       * Margin End
       * @see https://tailwindcss.com/docs/margin
       */
      me: [{
        me: [w]
      }],
      /**
       * Margin Top
       * @see https://tailwindcss.com/docs/margin
       */
      mt: [{
        mt: [w]
      }],
      /**
       * Margin Right
       * @see https://tailwindcss.com/docs/margin
       */
      mr: [{
        mr: [w]
      }],
      /**
       * Margin Bottom
       * @see https://tailwindcss.com/docs/margin
       */
      mb: [{
        mb: [w]
      }],
      /**
       * Margin Left
       * @see https://tailwindcss.com/docs/margin
       */
      ml: [{
        ml: [w]
      }],
      /**
       * Space Between X
       * @see https://tailwindcss.com/docs/space
       */
      "space-x": [{
        "space-x": [A]
      }],
      /**
       * Space Between X Reverse
       * @see https://tailwindcss.com/docs/space
       */
      "space-x-reverse": ["space-x-reverse"],
      /**
       * Space Between Y
       * @see https://tailwindcss.com/docs/space
       */
      "space-y": [{
        "space-y": [A]
      }],
      /**
       * Space Between Y Reverse
       * @see https://tailwindcss.com/docs/space
       */
      "space-y-reverse": ["space-y-reverse"],
      // Sizing
      /**
       * Width
       * @see https://tailwindcss.com/docs/width
       */
      w: [{
        w: ["auto", "min", "max", "fit", "svw", "lvw", "dvw", F, t]
      }],
      /**
       * Min-Width
       * @see https://tailwindcss.com/docs/min-width
       */
      "min-w": [{
        "min-w": [F, t, "min", "max", "fit"]
      }],
      /**
       * Max-Width
       * @see https://tailwindcss.com/docs/max-width
       */
      "max-w": [{
        "max-w": [F, t, "none", "full", "min", "max", "fit", "prose", {
          screen: [ke]
        }, ke]
      }],
      /**
       * Height
       * @see https://tailwindcss.com/docs/height
       */
      h: [{
        h: [F, t, "auto", "min", "max", "fit", "svh", "lvh", "dvh"]
      }],
      /**
       * Min-Height
       * @see https://tailwindcss.com/docs/min-height
       */
      "min-h": [{
        "min-h": [F, t, "min", "max", "fit", "svh", "lvh", "dvh"]
      }],
      /**
       * Max-Height
       * @see https://tailwindcss.com/docs/max-height
       */
      "max-h": [{
        "max-h": [F, t, "min", "max", "fit", "svh", "lvh", "dvh"]
      }],
      /**
       * Size
       * @see https://tailwindcss.com/docs/size
       */
      size: [{
        size: [F, t, "auto", "min", "max", "fit"]
      }],
      // Typography
      /**
       * Font Size
       * @see https://tailwindcss.com/docs/font-size
       */
      "font-size": [{
        text: ["base", ke, xe]
      }],
      /**
       * Font Smoothing
       * @see https://tailwindcss.com/docs/font-smoothing
       */
      "font-smoothing": ["antialiased", "subpixel-antialiased"],
      /**
       * Font Style
       * @see https://tailwindcss.com/docs/font-style
       */
      "font-style": ["italic", "not-italic"],
      /**
       * Font Weight
       * @see https://tailwindcss.com/docs/font-weight
       */
      "font-weight": [{
        font: ["thin", "extralight", "light", "normal", "medium", "semibold", "bold", "extrabold", "black", Dt]
      }],
      /**
       * Font Family
       * @see https://tailwindcss.com/docs/font-family
       */
      "font-family": [{
        font: [Qe]
      }],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-normal": ["normal-nums"],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-ordinal": ["ordinal"],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-slashed-zero": ["slashed-zero"],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-figure": ["lining-nums", "oldstyle-nums"],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-spacing": ["proportional-nums", "tabular-nums"],
      /**
       * Font Variant Numeric
       * @see https://tailwindcss.com/docs/font-variant-numeric
       */
      "fvn-fraction": ["diagonal-fractions", "stacked-fractions"],
      /**
       * Letter Spacing
       * @see https://tailwindcss.com/docs/letter-spacing
       */
      tracking: [{
        tracking: ["tighter", "tight", "normal", "wide", "wider", "widest", F]
      }],
      /**
       * Line Clamp
       * @see https://tailwindcss.com/docs/line-clamp
       */
      "line-clamp": [{
        "line-clamp": ["none", qe, Dt]
      }],
      /**
       * Line Height
       * @see https://tailwindcss.com/docs/line-height
       */
      leading: [{
        leading: ["none", "tight", "snug", "normal", "relaxed", "loose", be, F]
      }],
      /**
       * List Style Image
       * @see https://tailwindcss.com/docs/list-style-image
       */
      "list-image": [{
        "list-image": ["none", F]
      }],
      /**
       * List Style Type
       * @see https://tailwindcss.com/docs/list-style-type
       */
      "list-style-type": [{
        list: ["none", "disc", "decimal", F]
      }],
      /**
       * List Style Position
       * @see https://tailwindcss.com/docs/list-style-position
       */
      "list-style-position": [{
        list: ["inside", "outside"]
      }],
      /**
       * Placeholder Color
       * @deprecated since Tailwind CSS v3.0.0
       * @see https://tailwindcss.com/docs/placeholder-color
       */
      "placeholder-color": [{
        placeholder: [e]
      }],
      /**
       * Placeholder Opacity
       * @see https://tailwindcss.com/docs/placeholder-opacity
       */
      "placeholder-opacity": [{
        "placeholder-opacity": [$]
      }],
      /**
       * Text Alignment
       * @see https://tailwindcss.com/docs/text-align
       */
      "text-alignment": [{
        text: ["left", "center", "right", "justify", "start", "end"]
      }],
      /**
       * Text Color
       * @see https://tailwindcss.com/docs/text-color
       */
      "text-color": [{
        text: [e]
      }],
      /**
       * Text Opacity
       * @see https://tailwindcss.com/docs/text-opacity
       */
      "text-opacity": [{
        "text-opacity": [$]
      }],
      /**
       * Text Decoration
       * @see https://tailwindcss.com/docs/text-decoration
       */
      "text-decoration": ["underline", "overline", "line-through", "no-underline"],
      /**
       * Text Decoration Style
       * @see https://tailwindcss.com/docs/text-decoration-style
       */
      "text-decoration-style": [{
        decoration: [...X(), "wavy"]
      }],
      /**
       * Text Decoration Thickness
       * @see https://tailwindcss.com/docs/text-decoration-thickness
       */
      "text-decoration-thickness": [{
        decoration: ["auto", "from-font", be, xe]
      }],
      /**
       * Text Underline Offset
       * @see https://tailwindcss.com/docs/text-underline-offset
       */
      "underline-offset": [{
        "underline-offset": ["auto", be, F]
      }],
      /**
       * Text Decoration Color
       * @see https://tailwindcss.com/docs/text-decoration-color
       */
      "text-decoration-color": [{
        decoration: [e]
      }],
      /**
       * Text Transform
       * @see https://tailwindcss.com/docs/text-transform
       */
      "text-transform": ["uppercase", "lowercase", "capitalize", "normal-case"],
      /**
       * Text Overflow
       * @see https://tailwindcss.com/docs/text-overflow
       */
      "text-overflow": ["truncate", "text-ellipsis", "text-clip"],
      /**
       * Text Wrap
       * @see https://tailwindcss.com/docs/text-wrap
       */
      "text-wrap": [{
        text: ["wrap", "nowrap", "balance", "pretty"]
      }],
      /**
       * Text Indent
       * @see https://tailwindcss.com/docs/text-indent
       */
      indent: [{
        indent: B()
      }],
      /**
       * Vertical Alignment
       * @see https://tailwindcss.com/docs/vertical-align
       */
      "vertical-align": [{
        align: ["baseline", "top", "middle", "bottom", "text-top", "text-bottom", "sub", "super", F]
      }],
      /**
       * Whitespace
       * @see https://tailwindcss.com/docs/whitespace
       */
      whitespace: [{
        whitespace: ["normal", "nowrap", "pre", "pre-line", "pre-wrap", "break-spaces"]
      }],
      /**
       * Word Break
       * @see https://tailwindcss.com/docs/word-break
       */
      break: [{
        break: ["normal", "words", "all", "keep"]
      }],
      /**
       * Hyphens
       * @see https://tailwindcss.com/docs/hyphens
       */
      hyphens: [{
        hyphens: ["none", "manual", "auto"]
      }],
      /**
       * Content
       * @see https://tailwindcss.com/docs/content
       */
      content: [{
        content: ["none", F]
      }],
      // Backgrounds
      /**
       * Background Attachment
       * @see https://tailwindcss.com/docs/background-attachment
       */
      "bg-attachment": [{
        bg: ["fixed", "local", "scroll"]
      }],
      /**
       * Background Clip
       * @see https://tailwindcss.com/docs/background-clip
       */
      "bg-clip": [{
        "bg-clip": ["border", "padding", "content", "text"]
      }],
      /**
       * Background Opacity
       * @deprecated since Tailwind CSS v3.0.0
       * @see https://tailwindcss.com/docs/background-opacity
       */
      "bg-opacity": [{
        "bg-opacity": [$]
      }],
      /**
       * Background Origin
       * @see https://tailwindcss.com/docs/background-origin
       */
      "bg-origin": [{
        "bg-origin": ["border", "padding", "content"]
      }],
      /**
       * Background Position
       * @see https://tailwindcss.com/docs/background-position
       */
      "bg-position": [{
        bg: [...he(), Vo]
      }],
      /**
       * Background Repeat
       * @see https://tailwindcss.com/docs/background-repeat
       */
      "bg-repeat": [{
        bg: ["no-repeat", {
          repeat: ["", "x", "y", "round", "space"]
        }]
      }],
      /**
       * Background Size
       * @see https://tailwindcss.com/docs/background-size
       */
      "bg-size": [{
        bg: ["auto", "cover", "contain", jo]
      }],
      /**
       * Background Image
       * @see https://tailwindcss.com/docs/background-image
       */
      "bg-image": [{
        bg: ["none", {
          "gradient-to": ["t", "tr", "r", "br", "b", "bl", "l", "tl"]
        }, Ho]
      }],
      /**
       * Background Color
       * @see https://tailwindcss.com/docs/background-color
       */
      "bg-color": [{
        bg: [e]
      }],
      /**
       * Gradient Color Stops From Position
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-from-pos": [{
        from: [g]
      }],
      /**
       * Gradient Color Stops Via Position
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-via-pos": [{
        via: [g]
      }],
      /**
       * Gradient Color Stops To Position
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-to-pos": [{
        to: [g]
      }],
      /**
       * Gradient Color Stops From
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-from": [{
        from: [f]
      }],
      /**
       * Gradient Color Stops Via
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-via": [{
        via: [f]
      }],
      /**
       * Gradient Color Stops To
       * @see https://tailwindcss.com/docs/gradient-color-stops
       */
      "gradient-to": [{
        to: [f]
      }],
      // Borders
      /**
       * Border Radius
       * @see https://tailwindcss.com/docs/border-radius
       */
      rounded: [{
        rounded: [n]
      }],
      /**
       * Border Radius Start
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-s": [{
        "rounded-s": [n]
      }],
      /**
       * Border Radius End
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-e": [{
        "rounded-e": [n]
      }],
      /**
       * Border Radius Top
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-t": [{
        "rounded-t": [n]
      }],
      /**
       * Border Radius Right
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-r": [{
        "rounded-r": [n]
      }],
      /**
       * Border Radius Bottom
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-b": [{
        "rounded-b": [n]
      }],
      /**
       * Border Radius Left
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-l": [{
        "rounded-l": [n]
      }],
      /**
       * Border Radius Start Start
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-ss": [{
        "rounded-ss": [n]
      }],
      /**
       * Border Radius Start End
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-se": [{
        "rounded-se": [n]
      }],
      /**
       * Border Radius End End
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-ee": [{
        "rounded-ee": [n]
      }],
      /**
       * Border Radius End Start
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-es": [{
        "rounded-es": [n]
      }],
      /**
       * Border Radius Top Left
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-tl": [{
        "rounded-tl": [n]
      }],
      /**
       * Border Radius Top Right
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-tr": [{
        "rounded-tr": [n]
      }],
      /**
       * Border Radius Bottom Right
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-br": [{
        "rounded-br": [n]
      }],
      /**
       * Border Radius Bottom Left
       * @see https://tailwindcss.com/docs/border-radius
       */
      "rounded-bl": [{
        "rounded-bl": [n]
      }],
      /**
       * Border Width
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w": [{
        border: [a]
      }],
      /**
       * Border Width X
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-x": [{
        "border-x": [a]
      }],
      /**
       * Border Width Y
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-y": [{
        "border-y": [a]
      }],
      /**
       * Border Width Start
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-s": [{
        "border-s": [a]
      }],
      /**
       * Border Width End
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-e": [{
        "border-e": [a]
      }],
      /**
       * Border Width Top
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-t": [{
        "border-t": [a]
      }],
      /**
       * Border Width Right
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-r": [{
        "border-r": [a]
      }],
      /**
       * Border Width Bottom
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-b": [{
        "border-b": [a]
      }],
      /**
       * Border Width Left
       * @see https://tailwindcss.com/docs/border-width
       */
      "border-w-l": [{
        "border-l": [a]
      }],
      /**
       * Border Opacity
       * @see https://tailwindcss.com/docs/border-opacity
       */
      "border-opacity": [{
        "border-opacity": [$]
      }],
      /**
       * Border Style
       * @see https://tailwindcss.com/docs/border-style
       */
      "border-style": [{
        border: [...X(), "hidden"]
      }],
      /**
       * Divide Width X
       * @see https://tailwindcss.com/docs/divide-width
       */
      "divide-x": [{
        "divide-x": [a]
      }],
      /**
       * Divide Width X Reverse
       * @see https://tailwindcss.com/docs/divide-width
       */
      "divide-x-reverse": ["divide-x-reverse"],
      /**
       * Divide Width Y
       * @see https://tailwindcss.com/docs/divide-width
       */
      "divide-y": [{
        "divide-y": [a]
      }],
      /**
       * Divide Width Y Reverse
       * @see https://tailwindcss.com/docs/divide-width
       */
      "divide-y-reverse": ["divide-y-reverse"],
      /**
       * Divide Opacity
       * @see https://tailwindcss.com/docs/divide-opacity
       */
      "divide-opacity": [{
        "divide-opacity": [$]
      }],
      /**
       * Divide Style
       * @see https://tailwindcss.com/docs/divide-style
       */
      "divide-style": [{
        divide: X()
      }],
      /**
       * Border Color
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color": [{
        border: [o]
      }],
      /**
       * Border Color X
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-x": [{
        "border-x": [o]
      }],
      /**
       * Border Color Y
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-y": [{
        "border-y": [o]
      }],
      /**
       * Border Color S
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-s": [{
        "border-s": [o]
      }],
      /**
       * Border Color E
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-e": [{
        "border-e": [o]
      }],
      /**
       * Border Color Top
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-t": [{
        "border-t": [o]
      }],
      /**
       * Border Color Right
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-r": [{
        "border-r": [o]
      }],
      /**
       * Border Color Bottom
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-b": [{
        "border-b": [o]
      }],
      /**
       * Border Color Left
       * @see https://tailwindcss.com/docs/border-color
       */
      "border-color-l": [{
        "border-l": [o]
      }],
      /**
       * Divide Color
       * @see https://tailwindcss.com/docs/divide-color
       */
      "divide-color": [{
        divide: [o]
      }],
      /**
       * Outline Style
       * @see https://tailwindcss.com/docs/outline-style
       */
      "outline-style": [{
        outline: ["", ...X()]
      }],
      /**
       * Outline Offset
       * @see https://tailwindcss.com/docs/outline-offset
       */
      "outline-offset": [{
        "outline-offset": [be, F]
      }],
      /**
       * Outline Width
       * @see https://tailwindcss.com/docs/outline-width
       */
      "outline-w": [{
        outline: [be, xe]
      }],
      /**
       * Outline Color
       * @see https://tailwindcss.com/docs/outline-color
       */
      "outline-color": [{
        outline: [e]
      }],
      /**
       * Ring Width
       * @see https://tailwindcss.com/docs/ring-width
       */
      "ring-w": [{
        ring: se()
      }],
      /**
       * Ring Width Inset
       * @see https://tailwindcss.com/docs/ring-width
       */
      "ring-w-inset": ["ring-inset"],
      /**
       * Ring Color
       * @see https://tailwindcss.com/docs/ring-color
       */
      "ring-color": [{
        ring: [e]
      }],
      /**
       * Ring Opacity
       * @see https://tailwindcss.com/docs/ring-opacity
       */
      "ring-opacity": [{
        "ring-opacity": [$]
      }],
      /**
       * Ring Offset Width
       * @see https://tailwindcss.com/docs/ring-offset-width
       */
      "ring-offset-w": [{
        "ring-offset": [be, xe]
      }],
      /**
       * Ring Offset Color
       * @see https://tailwindcss.com/docs/ring-offset-color
       */
      "ring-offset-color": [{
        "ring-offset": [e]
      }],
      // Effects
      /**
       * Box Shadow
       * @see https://tailwindcss.com/docs/box-shadow
       */
      shadow: [{
        shadow: ["", "inner", "none", ke, Wo]
      }],
      /**
       * Box Shadow Color
       * @see https://tailwindcss.com/docs/box-shadow-color
       */
      "shadow-color": [{
        shadow: [Qe]
      }],
      /**
       * Opacity
       * @see https://tailwindcss.com/docs/opacity
       */
      opacity: [{
        opacity: [$]
      }],
      /**
       * Mix Blend Mode
       * @see https://tailwindcss.com/docs/mix-blend-mode
       */
      "mix-blend": [{
        "mix-blend": [...oe(), "plus-lighter", "plus-darker"]
      }],
      /**
       * Background Blend Mode
       * @see https://tailwindcss.com/docs/background-blend-mode
       */
      "bg-blend": [{
        "bg-blend": oe()
      }],
      // Filters
      /**
       * Filter
       * @deprecated since Tailwind CSS v3.0.0
       * @see https://tailwindcss.com/docs/filter
       */
      filter: [{
        filter: ["", "none"]
      }],
      /**
       * Blur
       * @see https://tailwindcss.com/docs/blur
       */
      blur: [{
        blur: [r]
      }],
      /**
       * Brightness
       * @see https://tailwindcss.com/docs/brightness
       */
      brightness: [{
        brightness: [s]
      }],
      /**
       * Contrast
       * @see https://tailwindcss.com/docs/contrast
       */
      contrast: [{
        contrast: [i]
      }],
      /**
       * Drop Shadow
       * @see https://tailwindcss.com/docs/drop-shadow
       */
      "drop-shadow": [{
        "drop-shadow": ["", "none", ke, F]
      }],
      /**
       * Grayscale
       * @see https://tailwindcss.com/docs/grayscale
       */
      grayscale: [{
        grayscale: [d]
      }],
      /**
       * Hue Rotate
       * @see https://tailwindcss.com/docs/hue-rotate
       */
      "hue-rotate": [{
        "hue-rotate": [u]
      }],
      /**
       * Invert
       * @see https://tailwindcss.com/docs/invert
       */
      invert: [{
        invert: [h]
      }],
      /**
       * Saturate
       * @see https://tailwindcss.com/docs/saturate
       */
      saturate: [{
        saturate: [P]
      }],
      /**
       * Sepia
       * @see https://tailwindcss.com/docs/sepia
       */
      sepia: [{
        sepia: [_]
      }],
      /**
       * Backdrop Filter
       * @deprecated since Tailwind CSS v3.0.0
       * @see https://tailwindcss.com/docs/backdrop-filter
       */
      "backdrop-filter": [{
        "backdrop-filter": ["", "none"]
      }],
      /**
       * Backdrop Blur
       * @see https://tailwindcss.com/docs/backdrop-blur
       */
      "backdrop-blur": [{
        "backdrop-blur": [r]
      }],
      /**
       * Backdrop Brightness
       * @see https://tailwindcss.com/docs/backdrop-brightness
       */
      "backdrop-brightness": [{
        "backdrop-brightness": [s]
      }],
      /**
       * Backdrop Contrast
       * @see https://tailwindcss.com/docs/backdrop-contrast
       */
      "backdrop-contrast": [{
        "backdrop-contrast": [i]
      }],
      /**
       * Backdrop Grayscale
       * @see https://tailwindcss.com/docs/backdrop-grayscale
       */
      "backdrop-grayscale": [{
        "backdrop-grayscale": [d]
      }],
      /**
       * Backdrop Hue Rotate
       * @see https://tailwindcss.com/docs/backdrop-hue-rotate
       */
      "backdrop-hue-rotate": [{
        "backdrop-hue-rotate": [u]
      }],
      /**
       * Backdrop Invert
       * @see https://tailwindcss.com/docs/backdrop-invert
       */
      "backdrop-invert": [{
        "backdrop-invert": [h]
      }],
      /**
       * Backdrop Opacity
       * @see https://tailwindcss.com/docs/backdrop-opacity
       */
      "backdrop-opacity": [{
        "backdrop-opacity": [$]
      }],
      /**
       * Backdrop Saturate
       * @see https://tailwindcss.com/docs/backdrop-saturate
       */
      "backdrop-saturate": [{
        "backdrop-saturate": [P]
      }],
      /**
       * Backdrop Sepia
       * @see https://tailwindcss.com/docs/backdrop-sepia
       */
      "backdrop-sepia": [{
        "backdrop-sepia": [_]
      }],
      // Tables
      /**
       * Border Collapse
       * @see https://tailwindcss.com/docs/border-collapse
       */
      "border-collapse": [{
        border: ["collapse", "separate"]
      }],
      /**
       * Border Spacing
       * @see https://tailwindcss.com/docs/border-spacing
       */
      "border-spacing": [{
        "border-spacing": [l]
      }],
      /**
       * Border Spacing X
       * @see https://tailwindcss.com/docs/border-spacing
       */
      "border-spacing-x": [{
        "border-spacing-x": [l]
      }],
      /**
       * Border Spacing Y
       * @see https://tailwindcss.com/docs/border-spacing
       */
      "border-spacing-y": [{
        "border-spacing-y": [l]
      }],
      /**
       * Table Layout
       * @see https://tailwindcss.com/docs/table-layout
       */
      "table-layout": [{
        table: ["auto", "fixed"]
      }],
      /**
       * Caption Side
       * @see https://tailwindcss.com/docs/caption-side
       */
      caption: [{
        caption: ["top", "bottom"]
      }],
      // Transitions and Animation
      /**
       * Tranisition Property
       * @see https://tailwindcss.com/docs/transition-property
       */
      transition: [{
        transition: ["none", "all", "", "colors", "opacity", "shadow", "transform", F]
      }],
      /**
       * Transition Duration
       * @see https://tailwindcss.com/docs/transition-duration
       */
      duration: [{
        duration: me()
      }],
      /**
       * Transition Timing Function
       * @see https://tailwindcss.com/docs/transition-timing-function
       */
      ease: [{
        ease: ["linear", "in", "out", "in-out", F]
      }],
      /**
       * Transition Delay
       * @see https://tailwindcss.com/docs/transition-delay
       */
      delay: [{
        delay: me()
      }],
      /**
       * Animation
       * @see https://tailwindcss.com/docs/animation
       */
      animate: [{
        animate: ["none", "spin", "ping", "pulse", "bounce", F]
      }],
      // Transforms
      /**
       * Transform
       * @see https://tailwindcss.com/docs/transform
       */
      transform: [{
        transform: ["", "gpu", "none"]
      }],
      /**
       * Scale
       * @see https://tailwindcss.com/docs/scale
       */
      scale: [{
        scale: [M]
      }],
      /**
       * Scale X
       * @see https://tailwindcss.com/docs/scale
       */
      "scale-x": [{
        "scale-x": [M]
      }],
      /**
       * Scale Y
       * @see https://tailwindcss.com/docs/scale
       */
      "scale-y": [{
        "scale-y": [M]
      }],
      /**
       * Rotate
       * @see https://tailwindcss.com/docs/rotate
       */
      rotate: [{
        rotate: [Ze, F]
      }],
      /**
       * Translate X
       * @see https://tailwindcss.com/docs/translate
       */
      "translate-x": [{
        "translate-x": [N]
      }],
      /**
       * Translate Y
       * @see https://tailwindcss.com/docs/translate
       */
      "translate-y": [{
        "translate-y": [N]
      }],
      /**
       * Skew X
       * @see https://tailwindcss.com/docs/skew
       */
      "skew-x": [{
        "skew-x": [I]
      }],
      /**
       * Skew Y
       * @see https://tailwindcss.com/docs/skew
       */
      "skew-y": [{
        "skew-y": [I]
      }],
      /**
       * Transform Origin
       * @see https://tailwindcss.com/docs/transform-origin
       */
      "transform-origin": [{
        origin: ["center", "top", "top-right", "right", "bottom-right", "bottom", "bottom-left", "left", "top-left", F]
      }],
      // Interactivity
      /**
       * Accent Color
       * @see https://tailwindcss.com/docs/accent-color
       */
      accent: [{
        accent: ["auto", e]
      }],
      /**
       * Appearance
       * @see https://tailwindcss.com/docs/appearance
       */
      appearance: [{
        appearance: ["none", "auto"]
      }],
      /**
       * Cursor
       * @see https://tailwindcss.com/docs/cursor
       */
      cursor: [{
        cursor: ["auto", "default", "pointer", "wait", "text", "move", "help", "not-allowed", "none", "context-menu", "progress", "cell", "crosshair", "vertical-text", "alias", "copy", "no-drop", "grab", "grabbing", "all-scroll", "col-resize", "row-resize", "n-resize", "e-resize", "s-resize", "w-resize", "ne-resize", "nw-resize", "se-resize", "sw-resize", "ew-resize", "ns-resize", "nesw-resize", "nwse-resize", "zoom-in", "zoom-out", F]
      }],
      /**
       * Caret Color
       * @see https://tailwindcss.com/docs/just-in-time-mode#caret-color-utilities
       */
      "caret-color": [{
        caret: [e]
      }],
      /**
       * Pointer Events
       * @see https://tailwindcss.com/docs/pointer-events
       */
      "pointer-events": [{
        "pointer-events": ["none", "auto"]
      }],
      /**
       * Resize
       * @see https://tailwindcss.com/docs/resize
       */
      resize: [{
        resize: ["none", "y", "x", ""]
      }],
      /**
       * Scroll Behavior
       * @see https://tailwindcss.com/docs/scroll-behavior
       */
      "scroll-behavior": [{
        scroll: ["auto", "smooth"]
      }],
      /**
       * Scroll Margin
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-m": [{
        "scroll-m": B()
      }],
      /**
       * Scroll Margin X
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-mx": [{
        "scroll-mx": B()
      }],
      /**
       * Scroll Margin Y
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-my": [{
        "scroll-my": B()
      }],
      /**
       * Scroll Margin Start
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-ms": [{
        "scroll-ms": B()
      }],
      /**
       * Scroll Margin End
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-me": [{
        "scroll-me": B()
      }],
      /**
       * Scroll Margin Top
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-mt": [{
        "scroll-mt": B()
      }],
      /**
       * Scroll Margin Right
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-mr": [{
        "scroll-mr": B()
      }],
      /**
       * Scroll Margin Bottom
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-mb": [{
        "scroll-mb": B()
      }],
      /**
       * Scroll Margin Left
       * @see https://tailwindcss.com/docs/scroll-margin
       */
      "scroll-ml": [{
        "scroll-ml": B()
      }],
      /**
       * Scroll Padding
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-p": [{
        "scroll-p": B()
      }],
      /**
       * Scroll Padding X
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-px": [{
        "scroll-px": B()
      }],
      /**
       * Scroll Padding Y
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-py": [{
        "scroll-py": B()
      }],
      /**
       * Scroll Padding Start
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-ps": [{
        "scroll-ps": B()
      }],
      /**
       * Scroll Padding End
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-pe": [{
        "scroll-pe": B()
      }],
      /**
       * Scroll Padding Top
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-pt": [{
        "scroll-pt": B()
      }],
      /**
       * Scroll Padding Right
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-pr": [{
        "scroll-pr": B()
      }],
      /**
       * Scroll Padding Bottom
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-pb": [{
        "scroll-pb": B()
      }],
      /**
       * Scroll Padding Left
       * @see https://tailwindcss.com/docs/scroll-padding
       */
      "scroll-pl": [{
        "scroll-pl": B()
      }],
      /**
       * Scroll Snap Align
       * @see https://tailwindcss.com/docs/scroll-snap-align
       */
      "snap-align": [{
        snap: ["start", "end", "center", "align-none"]
      }],
      /**
       * Scroll Snap Stop
       * @see https://tailwindcss.com/docs/scroll-snap-stop
       */
      "snap-stop": [{
        snap: ["normal", "always"]
      }],
      /**
       * Scroll Snap Type
       * @see https://tailwindcss.com/docs/scroll-snap-type
       */
      "snap-type": [{
        snap: ["none", "x", "y", "both"]
      }],
      /**
       * Scroll Snap Type Strictness
       * @see https://tailwindcss.com/docs/scroll-snap-type
       */
      "snap-strictness": [{
        snap: ["mandatory", "proximity"]
      }],
      /**
       * Touch Action
       * @see https://tailwindcss.com/docs/touch-action
       */
      touch: [{
        touch: ["auto", "none", "manipulation"]
      }],
      /**
       * Touch Action X
       * @see https://tailwindcss.com/docs/touch-action
       */
      "touch-x": [{
        "touch-pan": ["x", "left", "right"]
      }],
      /**
       * Touch Action Y
       * @see https://tailwindcss.com/docs/touch-action
       */
      "touch-y": [{
        "touch-pan": ["y", "up", "down"]
      }],
      /**
       * Touch Action Pinch Zoom
       * @see https://tailwindcss.com/docs/touch-action
       */
      "touch-pz": ["touch-pinch-zoom"],
      /**
       * User Select
       * @see https://tailwindcss.com/docs/user-select
       */
      select: [{
        select: ["none", "text", "all", "auto"]
      }],
      /**
       * Will Change
       * @see https://tailwindcss.com/docs/will-change
       */
      "will-change": [{
        "will-change": ["auto", "scroll", "contents", "transform", F]
      }],
      // SVG
      /**
       * Fill
       * @see https://tailwindcss.com/docs/fill
       */
      fill: [{
        fill: [e, "none"]
      }],
      /**
       * Stroke Width
       * @see https://tailwindcss.com/docs/stroke-width
       */
      "stroke-w": [{
        stroke: [be, xe, Dt]
      }],
      /**
       * Stroke
       * @see https://tailwindcss.com/docs/stroke
       */
      stroke: [{
        stroke: [e, "none"]
      }],
      // Accessibility
      /**
       * Screen Readers
       * @see https://tailwindcss.com/docs/screen-readers
       */
      sr: ["sr-only", "not-sr-only"],
      /**
       * Forced Color Adjust
       * @see https://tailwindcss.com/docs/forced-color-adjust
       */
      "forced-color-adjust": [{
        "forced-color-adjust": ["auto", "none"]
      }]
    },
    conflictingClassGroups: {
      overflow: ["overflow-x", "overflow-y"],
      overscroll: ["overscroll-x", "overscroll-y"],
      inset: ["inset-x", "inset-y", "start", "end", "top", "right", "bottom", "left"],
      "inset-x": ["right", "left"],
      "inset-y": ["top", "bottom"],
      flex: ["basis", "grow", "shrink"],
      gap: ["gap-x", "gap-y"],
      p: ["px", "py", "ps", "pe", "pt", "pr", "pb", "pl"],
      px: ["pr", "pl"],
      py: ["pt", "pb"],
      m: ["mx", "my", "ms", "me", "mt", "mr", "mb", "ml"],
      mx: ["mr", "ml"],
      my: ["mt", "mb"],
      size: ["w", "h"],
      "font-size": ["leading"],
      "fvn-normal": ["fvn-ordinal", "fvn-slashed-zero", "fvn-figure", "fvn-spacing", "fvn-fraction"],
      "fvn-ordinal": ["fvn-normal"],
      "fvn-slashed-zero": ["fvn-normal"],
      "fvn-figure": ["fvn-normal"],
      "fvn-spacing": ["fvn-normal"],
      "fvn-fraction": ["fvn-normal"],
      "line-clamp": ["display", "overflow"],
      rounded: ["rounded-s", "rounded-e", "rounded-t", "rounded-r", "rounded-b", "rounded-l", "rounded-ss", "rounded-se", "rounded-ee", "rounded-es", "rounded-tl", "rounded-tr", "rounded-br", "rounded-bl"],
      "rounded-s": ["rounded-ss", "rounded-es"],
      "rounded-e": ["rounded-se", "rounded-ee"],
      "rounded-t": ["rounded-tl", "rounded-tr"],
      "rounded-r": ["rounded-tr", "rounded-br"],
      "rounded-b": ["rounded-br", "rounded-bl"],
      "rounded-l": ["rounded-tl", "rounded-bl"],
      "border-spacing": ["border-spacing-x", "border-spacing-y"],
      "border-w": ["border-w-s", "border-w-e", "border-w-t", "border-w-r", "border-w-b", "border-w-l"],
      "border-w-x": ["border-w-r", "border-w-l"],
      "border-w-y": ["border-w-t", "border-w-b"],
      "border-color": ["border-color-s", "border-color-e", "border-color-t", "border-color-r", "border-color-b", "border-color-l"],
      "border-color-x": ["border-color-r", "border-color-l"],
      "border-color-y": ["border-color-t", "border-color-b"],
      "scroll-m": ["scroll-mx", "scroll-my", "scroll-ms", "scroll-me", "scroll-mt", "scroll-mr", "scroll-mb", "scroll-ml"],
      "scroll-mx": ["scroll-mr", "scroll-ml"],
      "scroll-my": ["scroll-mt", "scroll-mb"],
      "scroll-p": ["scroll-px", "scroll-py", "scroll-ps", "scroll-pe", "scroll-pt", "scroll-pr", "scroll-pb", "scroll-pl"],
      "scroll-px": ["scroll-pr", "scroll-pl"],
      "scroll-py": ["scroll-pt", "scroll-pb"],
      touch: ["touch-x", "touch-y", "touch-pz"],
      "touch-x": ["touch"],
      "touch-y": ["touch"],
      "touch-pz": ["touch"]
    },
    conflictingClassGroupModifiers: {
      "font-size": ["leading"]
    }
  };
}, E = /* @__PURE__ */ Ao(Yo), H = (e) => E(e), Ko = ["data-accordion-id"], Jo = "w-full", Wf = /* @__PURE__ */ S({
  __name: "FwbAccordion",
  props: {
    class: { default: "" },
    collapsed: { type: Boolean, default: !1 },
    flushed: { type: Boolean, default: !1 },
    persistent: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = fs(), r = e, s = c(() => r.class ?? ""), o = c(() => H([
      Jo,
      s.value
    ]));
    return Mt(t, { ...r }), (n, l) => (p(), b("div", {
      "data-accordion-id": x(t),
      class: C(o.value)
    }, [
      k(n.$slots, "default")
    ], 10, Ko));
  }
}), Xo = (e, t, r) => {
  const s = "p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900", o = c(() => r.class), n = c(() => r.activeClass), l = c(() => e.value?.flushed), a = c(() => t.value?.isVisible), i = c(() => e.value?.panels?.length ?? 0), d = c(() => t.value?.order === i.value - 1);
  return c(
    () => H(
      [
        s,
        l.value && "border-x-0 border-t-0",
        !a.value && "hidden",
        !d.value && !l.value && "border-b-0",
        d.value && "border-t-0",
        o.value,
        a.value ? n.value : ""
      ].filter((h) => h).join(" ")
    )
  ).value;
}, Gf = /* @__PURE__ */ S({
  __name: "FwbAccordionContent",
  props: {
    activeClass: { default: "" },
    class: { default: "" }
  },
  setup(e) {
    const t = e, { getAccordionState: r } = Mt(), s = R(!1), o = R(), n = R(), l = c(() => (o.value && o.value.closest("[data-panel-id]"))?.dataset.panelId), a = c(() => n.value?.panels.find((d) => d.id === l.value)), i = c(() => n.value && a.value ? Xo(n, a, t) : null);
    return je(() => {
      n.value = r({ element: o }), s.value = !0;
    }), (d, u) => (p(), b("div", {
      ref_key: "contentRef",
      ref: o
    }, [
      s.value ? (p(), b("div", {
        key: 0,
        class: C(i.value)
      }, [
        k(d.$slots, "default")
      ], 2)) : z("", !0)
    ], 512));
  }
}), vs = "flex w-full items-center justify-between gap-3 font-medium p-5 text-gray-500 dark:text-gray-400 rtl:text-right", Zo = `${vs} border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-800`, Qo = `${vs} border-b border-gray-200 dark:border-gray-700`, en = "ml-auto size-6 shrink-0", tn = (e, t, r) => {
  const s = c(
    () => H([
      en,
      t.value?.isVisible ? "rotate-180" : ""
    ])
  ), o = c(() => r.class), n = c(() => r.activeClass), l = c(() => e.value?.panels?.length ?? 0), a = c(() => t.value?.order === 0), i = c(() => t.value?.order === l.value - 1), d = c(() => t.value?.isVisible), u = c(() => e.value?.flushed), h = c(
    () => H(
      [
        u.value ? Qo : Zo,
        d.value ? "text-gray-900 dark:text-white" : "text-gray-500 dark:text-gray-400",
        d.value && !u.value && "bg-gray-100 dark:bg-gray-800",
        a.value && !u.value && "rounded-t-xl",
        a.value && u.value && "border-t-0",
        !i.value && "border-b-0",
        u.value && "border-x-0 border-b",
        o.value,
        d.value ? n.value : ""
      ].filter((y) => y).join(" ")
    )
  );
  return {
    arrowClasses: s.value,
    headerClasses: h.value
  };
}, qf = /* @__PURE__ */ S({
  __name: "FwbAccordionHeader",
  props: {
    activeClass: { default: "" },
    class: { default: "" }
  },
  setup(e) {
    const t = e, { getAccordionState: r } = Mt(), s = R(!1), o = R(), n = R(), l = c(() => (o.value && o.value.closest("[data-panel-id]"))?.dataset.panelId), a = c(() => n.value?.panels.find((y) => y.id === l.value)), i = c(() => n.value && a.value ? tn(n, a, t) : null), d = c(() => i.value?.arrowClasses), u = c(() => i.value?.headerClasses);
    je(() => {
      n.value = r({ element: o }), s.value = !0;
    });
    const h = () => {
      if (n.value.persistent) {
        a.value.isVisible = !a.value?.isVisible;
        return;
      }
      const y = a.value.isVisible;
      n.value.panels.forEach((f) => {
        f.id !== l.value ? f.isVisible = !1 : f.isVisible = !y;
      });
    };
    return (y, f) => (p(), b("div", {
      ref_key: "headerRef",
      ref: o
    }, [
      s.value ? (p(), b("button", {
        key: 0,
        class: C(u.value),
        type: "button",
        onClick: h
      }, [
        k(y.$slots, "default"),
        (p(), b("svg", {
          class: C(d.value),
          fill: "currentColor",
          viewBox: "0 0 20 20",
          xmlns: "http://www.w3.org/2000/svg"
        }, f[0] || (f[0] = [
          m("path", { d: "M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" }, null, -1)
        ]), 2))
      ], 2)) : z("", !0)
    ], 512));
  }
}), rn = ({ props: e, isVisible: t }) => {
  const r = e.activeClass ?? "";
  return H([`${t ? r : ""}`]);
}, sn = ["data-panel-id"], Uf = /* @__PURE__ */ S({
  __name: "FwbAccordionPanel",
  props: {
    activeClass: { default: "" }
  },
  emits: ["show", "hide"],
  setup(e, { emit: t }) {
    const r = e, {
      getAccordionState: s,
      getAccordionPanelState: o
    } = Mt(), n = R(), l = fs(), a = R(), i = R(), d = c(
      () => i.value ? o({ accordionState: i, panelId: l }) : null
    ), u = c(
      () => rn({
        isVisible: d.value?.isVisible ?? !1,
        props: r
      })
    ), h = c(() => d.value?.isVisible), y = t;
    return Le(h, () => {
      h.value ? y("show") : y("hide");
    }), je(() => {
      i.value = s({ element: n }), a.value = i.value.id;
      const f = n.value && n.value.parentElement ? Array.from(n.value.parentElement.children).indexOf(n.value) : -1;
      i.value.panels.push({
        id: l,
        isVisible: (!i.value.collapsed && f === 0) ?? !1,
        order: f
      });
    }), (f, g) => (p(), b("div", {
      ref_key: "panelRef",
      ref: n,
      "data-panel-id": x(l),
      class: C(u.value)
    }, [
      a.value ? k(f.$slots, "default", { key: 0 }) : z("", !0)
    ], 10, sn));
  }
}), on = { class: "flex items-center" }, nn = "ml-auto -mr-1.5 -my-1.5 rounded-lg focus:ring-2 p-1.5 inline-flex h-8 w-8 dark:bg-gray-800 dark:hover:bg-gray-700", Yf = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbAlert",
  props: {
    type: { default: "info" },
    closable: { type: Boolean, default: !1 },
    icon: { type: Boolean, default: !1 },
    border: { type: Boolean, default: !1 }
  },
  emits: ["close"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = ie(), n = {
      danger: "text-red-800 dark:text-red-400",
      dark: "text-gray-800 dark:text-gray-300",
      info: "text-blue-800 dark:text-blue-400",
      success: "text-green-800 dark:text-green-400",
      warning: "text-yellow-800 dark:text-yellow-300"
    }, l = {
      danger: "bg-red-50",
      dark: "bg-gray-50",
      info: "bg-blue-50",
      success: "bg-green-50",
      warning: "bg-yellow-50"
    }, a = {
      danger: "text-red-500 dark:text-red-400 bg-red-50 hover:bg-red-200 focus:ring-red-400",
      dark: "text-gray-500 dark:text-gray-300 bg-gray-50 hover:bg-gray-200 focus:ring-gray-400 dark:hover:text-white",
      info: "text-blue-500 dark:text-blue-400 bg-blue-50 hover:bg-blue-200 focus:ring-blue-400",
      success: "text-green-500 dark:text-green-400 bg-green-50 hover:bg-green-200 focus:ring-green-400",
      warning: "text-yellow-500 dark:text-yellow-300 bg-yellow-50 hover:bg-yellow-200 focus:ring-yellow-400"
    }, i = c(() => E(nn, a[r.type])), d = {
      danger: "border-red-500 dark:text-red-400",
      dark: "border-gray-500 dark:text-gray-400",
      info: "border-blue-500 dark:text-blue-400",
      success: "border-green-500 dark:text-green-400",
      warning: "border-yellow-500 dark:text-yellow-400"
    }, u = {
      danger: [n.danger, l.danger].join(" "),
      dark: [n.dark, l.dark].join(" "),
      info: [n.info, l.info].join(" "),
      success: [n.success, l.success].join(" "),
      warning: [n.warning, l.warning].join(" ")
    }, h = c(() => E(
      "p-4 gap-3 text-sm dark:bg-gray-800 rounded-lg",
      u[r.type],
      (r.icon || r.closable) && "flex items-center",
      d[r.type],
      r.border && "border",
      o.class
    )), y = R(!0);
    function f() {
      s("close"), y.value = !1;
    }
    return (g, v) => y.value ? (p(), b("div", te({ key: 0 }, g.$attrs, {
      class: h.value,
      role: "alert"
    }), [
      m("div", on, [
        g.icon || g.$slots.icon ? k(g.$slots, "icon", { key: 0 }, () => [
          v[0] || (v[0] = m("svg", {
            class: "size-5 shrink-0",
            fill: "currentColor",
            viewBox: "0 0 20 20",
            xmlns: "http://www.w3.org/2000/svg"
          }, [
            m("path", {
              "fill-rule": "evenodd",
              d: "M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z",
              "clip-rule": "evenodd"
            })
          ], -1))
        ]) : z("", !0),
        k(g.$slots, "title")
      ]),
      k(g.$slots, "default", { onCloseClick: f }),
      k(g.$slots, "close-icon", { onCloseClick: f }, () => [
        g.closable ? (p(), b("button", {
          key: 0,
          type: "button",
          class: C(i.value),
          "aria-label": "Close",
          onClick: f
        }, v[1] || (v[1] = [
          m("span", { class: "sr-only" }, "Dismiss", -1),
          m("svg", {
            class: "size-5",
            fill: "currentColor",
            viewBox: "0 0 20 20",
            xmlns: "http://www.w3.org/2000/svg"
          }, [
            m("path", {
              "fill-rule": "evenodd",
              d: "M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z",
              "clip-rule": "evenodd"
            })
          ], -1)
        ]), 2)) : z("", !0)
      ])
    ], 16)) : z("", !0);
  }
}), xr = {
  xs: "w-6 h-6",
  sm: "w-8 h-8",
  md: "w-10 h-10",
  lg: "w-20 h-20",
  xl: "w-36 h-36"
}, kr = {
  default: "rounded",
  rounded: "rounded-full"
}, an = "ring-2 ring-gray-300 dark:ring-gray-500 p-1", ln = "absolute h-3.5 w-3.5 rounded-full border-2 border-white dark:border-gray-800", dn = {
  away: "bg-gray-400",
  busy: "bg-yellow-400",
  offline: "bg-red-400",
  online: "bg-green-400"
}, un = {
  "top-right-rounded": "top-0 -right-0.5",
  "top-right-default": "-top-1.5 -right-1.5",
  "top-left-rounded": "top-0 left-0",
  "top-left-default": "top-0 left-0 transform -translate-y-1/2 -translate-x-1/2",
  "bottom-right-rounded": "bottom-0 -right-0.5",
  "bottom-right-default": "bottom-0 -right-1.5 translate-y-1/2",
  "bottom-left-rounded": "bottom-0 left-0",
  "bottom-left-default": "-bottom-1.5 left-0 transform -translate-x-1/2 "
}, Cr = "w-auto h-auto text-gray-400", cn = "absolute", fn = "flex overflow-hidden relative justify-center items-center", pn = "bg-gray-100 dark:bg-gray-600", gn = "font-medium text-gray-600 dark:text-gray-300", hn = {
  xs: "bottom-0",
  sm: "bottom-0",
  md: "-bottom-1",
  lg: "-bottom-2",
  xl: "-bottom-4"
};
function mn(e) {
  const t = c(
    () => H([
      xr[e.size.value],
      kr[e.rounded.value ? "rounded" : "default"],
      e.bordered.value ? an : "",
      e.stacked.value ? "border-2 border-white dark:border-gray-800" : ""
    ])
  ), r = c(() => {
    const a = `${e.statusPosition.value}-${e.rounded.value ? "rounded" : "default"}`;
    return H([
      ln,
      dn[e.status.value],
      un[a]
    ]);
  }), s = c(
    () => H([
      Cr
    ])
  ), o = c(
    () => H([
      Cr,
      cn,
      hn[e.size.value]
    ])
  ), n = c(
    () => H([
      fn,
      xr[e.size.value],
      kr[e.rounded.value ? "rounded" : "default"],
      e.img.value && e.bordered.value ? "" : pn,
      e.bordered.value ? " overflow-visible" : ""
    ])
  ), l = c(
    () => H([
      gn
    ])
  );
  return {
    avatarClasses: t,
    avatarDotClasses: r,
    avatarPlaceholderClasses: s,
    avatarPlaceholderIconClasses: o,
    avatarPlaceholderInitialsClasses: l,
    avatarPlaceholderWrapperClasses: n
  };
}
const bn = { class: "relative" }, vn = ["alt", "src"], yn = ["data-pos"], Kf = /* @__PURE__ */ S({
  __name: "FwbAvatar",
  props: {
    alt: {
      type: String,
      default: "Avatar"
    },
    bordered: {
      type: Boolean,
      default: !1
    },
    img: {
      type: String,
      default: ""
    },
    rounded: {
      type: Boolean,
      default: !1
    },
    size: {
      type: String,
      default: "md"
    },
    stacked: {
      type: Boolean,
      default: !1
    },
    status: {
      type: String,
      default: null
    },
    statusPosition: {
      type: String,
      default: "top-right"
    },
    initials: {
      type: String,
      default: null
    }
  },
  setup(e) {
    const t = R(!1);
    function r() {
      t.value = !0;
    }
    const s = Ye(), o = c(() => s.placeholder), n = e, {
      avatarClasses: l,
      avatarDotClasses: a,
      avatarPlaceholderClasses: i,
      avatarPlaceholderIconClasses: d,
      avatarPlaceholderInitialsClasses: u,
      avatarPlaceholderWrapperClasses: h
    } = mn(J(n));
    return (y, f) => (p(), b("div", bn, [
      m("div", {
        class: C(x(h))
      }, [
        e.img && !t.value ? (p(), b("img", {
          key: 0,
          alt: e.alt,
          class: C(x(l)),
          src: e.img,
          onError: r
        }, null, 42, vn)) : !e.initials && o.value ? (p(), b("div", {
          key: 1,
          class: C(x(i))
        }, [
          k(y.$slots, "placeholder")
        ], 2)) : !e.img && !e.initials ? (p(), b("svg", {
          key: 2,
          class: C(x(d)),
          fill: "currentColor",
          viewBox: "0 0 20 20",
          xmlns: "http://www.w3.org/2000/svg"
        }, f[0] || (f[0] = [
          m("path", {
            "clip-rule": "evenodd",
            d: "M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z",
            "fill-rule": "evenodd"
          }, null, -1)
        ]), 2)) : (p(), b("div", {
          key: 3,
          class: C(x(u))
        }, O(e.initials), 3))
      ], 2),
      e.status ? (p(), b("span", {
        key: 0,
        class: C(x(a)),
        "data-pos": e.statusPosition
      }, null, 10, yn)) : z("", !0)
    ]));
  }
}), we = (e, t) => {
  const r = e.__vccOpts || e;
  for (const [s, o] of t)
    r[s] = o;
  return r;
}, wn = {}, xn = { class: "flex -space-x-4" };
function kn(e, t) {
  return p(), b("div", xn, [
    k(e.$slots, "default")
  ]);
}
const Jf = /* @__PURE__ */ we(wn, [["render", kn]]), Cn = ["href"], Xf = /* @__PURE__ */ S({
  __name: "FwbAvatarStackCounter",
  props: {
    total: {
      type: Number,
      default: 1
    },
    href: {
      type: String,
      default: "#"
    }
  },
  setup(e) {
    return (t, r) => (p(), b("a", {
      class: "relative flex size-10 items-center justify-center rounded-full border-2 border-white bg-gray-700 text-xs font-medium text-white hover:bg-gray-600 dark:border-gray-800",
      href: e.href
    }, "+" + O(e.total), 9, Cn));
  }
}), _n = "mr-2 px-2.5 py-0.5 rounded flex items-center justify-center", $n = "bg-blue-100 hover:bg-blue-200 text-blue-800 dark:text-blue-800 dark:hover:bg-blue-300", Sn = "p-1 rounded-full mr-2", Tn = {
  default: "text-blue-800 dark:text-blue-300",
  dark: "text-gray-800 dark:text-gray-300",
  red: "text-red-800 dark:text-red-300",
  green: "text-green-800 dark:text-green-300",
  yellow: "text-yellow-800 dark:text-yellow-300",
  indigo: "text-indigo-800 dark:text-indigo-300",
  purple: "text-purple-800 dark:text-purple-300",
  pink: "text-pink-800 dark:text-pink-300"
}, zn = {
  default: "bg-blue-100 dark:bg-blue-900",
  dark: "bg-gray-100 dark:bg-gray-700",
  red: "bg-red-100 dark:bg-red-900",
  green: "bg-green-100 dark:bg-green-900",
  yellow: "bg-yellow-100 dark:bg-yellow-900",
  indigo: "bg-indigo-100 dark:bg-indigo-900",
  purple: "bg-purple-100 dark:bg-purple-900",
  pink: "bg-pink-100 dark:bg-pink-900"
}, Pn = {
  xs: "text-xs font-semibold",
  sm: "text-sm font-medium"
};
function An(e, t) {
  const r = ie();
  return {
    badgeClasses: c(() => E(
      Pn[e.size],
      e.href ? "" : zn[e.type],
      e.href ? "" : Tn[e.type],
      e.href ? $n : "",
      t.isContentEmpty.value ? Sn : _n,
      r.class
    ))
  };
}
const Zf = /* @__PURE__ */ S({
  __name: "FwbBadge",
  props: {
    type: { default: "default" },
    size: { default: "xs" },
    href: { default: null }
  },
  setup(e) {
    const t = e, r = Ye(), s = c(() => !r.default), o = c(() => t.href ? "a" : "span"), { badgeClasses: n } = An(t, { isContentEmpty: s });
    return (l, a) => (p(), W(re(o.value), {
      class: C(x(n)),
      href: l.href
    }, {
      default: D(() => [
        k(l.$slots, "icon"),
        k(l.$slots, "default")
      ]),
      _: 3
    }, 8, ["class", "href"]));
  }
});
function Fn(e) {
  return e && e.__esModule && Object.prototype.hasOwnProperty.call(e, "default") ? e.default : e;
}
var Ht = { exports: {} };
/*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/
var _r;
function Bn() {
  return _r || (_r = 1, function(e) {
    (function() {
      var t = {}.hasOwnProperty;
      function r() {
        for (var n = "", l = 0; l < arguments.length; l++) {
          var a = arguments[l];
          a && (n = o(n, s(a)));
        }
        return n;
      }
      function s(n) {
        if (typeof n == "string" || typeof n == "number")
          return n;
        if (typeof n != "object")
          return "";
        if (Array.isArray(n))
          return r.apply(null, n);
        if (n.toString !== Object.prototype.toString && !n.toString.toString().includes("[native code]"))
          return n.toString();
        var l = "";
        for (var a in n)
          t.call(n, a) && n[a] && (l = o(l, a));
        return l;
      }
      function o(n, l) {
        return l ? n ? n + " " + l : n + l : n;
      }
      e.exports ? (r.default = r, e.exports = r) : window.classNames = r;
    })();
  }(Ht)), Ht.exports;
}
var Mn = Bn();
const U = /* @__PURE__ */ Fn(Mn), In = "inline-flex items-center space-x-1 md:space-x-3", On = {
  default: "flex",
  solid: "flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
};
function Ln(e) {
  const t = c(() => U(In)), r = c(() => U(
    On[e.solid.value ? "solid" : "defauilt"]
  ));
  return {
    breadcrumbClasses: t,
    breadcrumbWrapperClasses: r
  };
}
const Qf = /* @__PURE__ */ S({
  __name: "FwbBreadcrumb",
  props: {
    solid: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, { breadcrumbClasses: r, breadcrumbWrapperClasses: s } = Ln(J(t));
    return (o, n) => (p(), b("nav", {
      class: C(x(s)),
      "aria-label": "Breadcrumb"
    }, [
      m("ol", {
        class: C(x(r))
      }, [
        k(o.$slots, "default")
      ], 2)
    ], 2));
  }
}), En = "ml-1 inline-flex items-center text-sm font-medium dark:text-gray-400", Rn = "text-gray-700 hover:text-gray-900 dark:hover:text-white", Nn = "text-gray-500";
function jn(e) {
  return {
    breadcrumbItemClasses: c(() => U(
      En,
      e.href.value ? Rn : Nn
    ))
  };
}
const Vn = { class: "inline-flex items-center" }, Dn = {
  key: 0,
  class: "mr-1 size-6 text-gray-400",
  fill: "currentColor",
  viewBox: "0 0 20 20",
  xmlns: "http://www.w3.org/2000/svg"
}, Hn = {
  key: 0,
  class: "mr-2 size-4",
  fill: "currentColor",
  viewBox: "0 0 20 20",
  xmlns: "http://www.w3.org/2000/svg"
}, ep = /* @__PURE__ */ S({
  __name: "FwbBreadcrumbItem",
  props: {
    href: {
      type: String,
      default: null
    },
    home: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, r = c(() => t.href ? "a" : "span"), { breadcrumbItemClasses: s } = jn(J(t));
    return (o, n) => (p(), b("li", Vn, [
      k(o.$slots, "arrow-icon", {}, () => [
        e.home ? z("", !0) : (p(), b("svg", Dn, n[0] || (n[0] = [
          m("path", {
            "clip-rule": "evenodd",
            d: "M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z",
            "fill-rule": "evenodd"
          }, null, -1)
        ])))
      ]),
      (p(), W(re(r.value), {
        class: C(x(s)),
        href: e.href
      }, {
        default: D(() => [
          k(o.$slots, "home-icon", {}, () => [
            e.home ? (p(), b("svg", Hn, n[1] || (n[1] = [
              m("path", { d: "M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" }, null, -1)
            ]))) : z("", !0)
          ]),
          k(o.$slots, "default")
        ]),
        _: 3
      }, 8, ["class", "href"]))
    ]));
  }
}), $r = {
  default: {
    default: "text-white bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg dark:bg-blue-600 focus:outline-none dark:focus:ring-blue-800",
    blue: "text-white bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg dark:bg-blue-600 focus:outline-none dark:focus:ring-blue-800",
    alternative: "font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600",
    dark: "text-white bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg dark:bg-gray-800 dark:focus:ring-gray-700 dark:border-gray-700",
    light: "text-gray-900 bg-white border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-200 font-medium rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-gray-700",
    green: "focus:outline-none text-white bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg dark:bg-green-600 dark:focus:ring-green-800",
    red: "focus:outline-none text-white bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg dark:bg-red-600 dark:focus:ring-red-900",
    yellow: "focus:outline-none text-white bg-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg dark:focus:ring-yellow-900",
    purple: "focus:outline-none text-white bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg dark:bg-purple-600 dark:focus:ring-purple-900",
    pink: "focus:outline-none text-white bg-pink-700 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg dark:bg-pink-600 dark:focus:ring-pink-900"
  },
  hover: {
    default: "hover:bg-blue-800 dark:hover:bg-blue-700",
    blue: "hover:bg-blue-800 dark:hover:bg-blue-700",
    alternative: "hover:bg-gray-100 hover:text-blue-700 dark:hover:text-white dark:hover:bg-gray-700",
    dark: "hover:bg-gray-900 dark:hover:bg-gray-700",
    light: "hover:bg-gray-100 dark:hover:border-gray-600",
    green: "hover:bg-green-800 dark:hover:bg-green-700",
    red: "hover:bg-red-800 dark:hover:bg-red-700",
    yellow: "hover:bg-yellow-500",
    purple: "hover:bg-purple-800 dark:hover:bg-purple-700",
    pink: "hover:bg-pink-800 dark:hover:bg-pink-700"
  }
}, Sr = {
  default: {
    dark: "text-gray-900 border border-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm text-center dark:border-gray-600 dark:text-gray-400 dark:focus:ring-gray-800",
    default: "text-blue-700 border border-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:border-blue-500 dark:text-blue-500 dark:focus:ring-blue-800",
    blue: "text-blue-700 border border-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:border-blue-500 dark:text-blue-500 dark:focus:ring-blue-800",
    green: "text-green-700 border border-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm text-center dark:border-green-500 dark:text-green-500 dark:focus:ring-green-800",
    purple: "text-purple-700 border border-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm text-center dark:border-purple-400 dark:text-purple-400 dark:focus:ring-purple-900",
    pink: "text-pink-700 border border-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm text-center dark:border-pink-400 dark:text-pink-400 dark:focus:ring-pink-900",
    red: "text-red-700 border border-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center dark:border-red-500 dark:text-red-500 dark:focus:ring-red-900",
    yellow: "text-yellow-400 border border-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm text-center dark:border-yellow-300 dark:text-yellow-300 dark:focus:ring-yellow-900"
  },
  hover: {
    dark: "hover:text-white hover:bg-gray-900 dark:hover:text-white dark:hover:bg-gray-600",
    default: "hover:text-white hover:bg-blue-800 dark:hover:text-white dark:hover:bg-blue-600",
    blue: "hover:text-white hover:bg-blue-800 dark:hover:text-white dark:hover:bg-blue-600",
    green: "hover:text-white hover:bg-green-800 dark:hover:text-white dark:hover:bg-green-600",
    purple: "hover:text-white hover:bg-purple-800 dark:hover:text-white dark:hover:bg-purple-500",
    pink: "hover:text-white hover:bg-pink-800 dark:hover:text-white dark:hover:bg-pink-500",
    red: "hover:text-white hover:bg-red-800 dark:hover:text-white dark:hover:bg-red-600",
    yellow: "hover:text-white hover:bg-yellow-500 dark:hover:text-white dark:hover:bg-yellow-400"
  }
}, Tr = {
  hover: {
    "cyan-blue": "hover:bg-gradient-to-bl",
    "green-blue": "hover:bg-gradient-to-bl",
    "pink-orange": "hover:bg-gradient-to-bl",
    "purple-blue": "hover:bg-gradient-to-bl",
    "purple-pink": "hover:bg-gradient-to-l",
    "red-yellow": "hover:bg-gradient-to-bl",
    "teal-lime": "hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200",
    blue: "hover:bg-gradient-to-br",
    cyan: "hover:bg-gradient-to-br",
    green: "hover:bg-gradient-to-br",
    lime: "hover:bg-gradient-to-br",
    pink: "hover:bg-gradient-to-br",
    purple: "hover:bg-gradient-to-br",
    red: "hover:bg-gradient-to-br",
    teal: "hover:bg-gradient-to-br"
  },
  default: {
    "cyan-blue": "text-white bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg",
    "green-blue": "text-white bg-gradient-to-br from-green-400 to-blue-600 focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg",
    "pink-orange": "text-white bg-gradient-to-br from-pink-500 to-orange-400 focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg",
    "purple-blue": "text-white bg-gradient-to-br from-purple-600 to-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg",
    "purple-pink": "text-white bg-gradient-to-r from-purple-500 to-pink-500 focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg",
    "red-yellow": "text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg",
    "teal-lime": "text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg",
    blue: "text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 rounded-lg",
    cyan: "text-white bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 rounded-lg",
    green: "text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 rounded-lg",
    lime: "text-gray-900 bg-gradient-to-r from-lime-500 via-lime-600 to-lime-700 focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 rounded-lg",
    pink: "text-white bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 rounded-lg",
    purple: "text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 rounded-lg",
    red: "text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg",
    teal: "text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 rounded-lg"
  }
}, zr = {
  default: {
    "cyan-blue": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800",
    "green-blue": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800",
    "pink-orange": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800",
    "purple-blue": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800",
    "purple-pink": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800",
    "red-yellow": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 dark:text-white focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400",
    "teal-lime": "relative inline-flex items-center justify-center overflow-hidden font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 dark:text-white focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800"
  },
  hover: {
    "cyan-blue": "group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white",
    "green-blue": "group-hover:from-green-400 group-hover:to-blue-600 hover:text-white",
    "pink-orange": "group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white",
    "purple-blue": "group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white",
    "purple-pink": "group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white",
    "red-yellow": "group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:hover:text-gray-900",
    "teal-lime": "group-hover:from-teal-300 group-hover:to-lime-300 dark:hover:text-gray-900"
  }
}, Wn = {
  xs: "text-xs px-2 py-1",
  sm: "text-sm px-3 py-1.5",
  md: "text-sm px-4 py-2",
  lg: "text-base px-5 py-2.5",
  xl: "text-base px-6 py-3"
}, Gn = {
  xs: "text-xs p-1",
  sm: "text-sm p-1.5",
  md: "text-sm p-2",
  lg: "text-base p-2.5",
  xl: "text-base p-3"
}, Pr = {
  blue: "shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80",
  cyan: "shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80",
  green: "shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80",
  lime: "shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80",
  pink: "shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80",
  purple: "shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80",
  red: "shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80",
  teal: "shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80"
}, Wt = ["blue", "green", "cyan", "teal", "lime", "red", "pink", "purple"], qn = ["alternative", "light"];
function Un(e) {
  const t = Ye(), r = c(() => e.square.value ? Gn[e.size.value] : Wn[e.size.value]), s = c(() => {
    const n = !!e.gradient.value, l = !!e.color.value, a = e.outline.value;
    let i = "", d = "";
    if (n && a)
      e.gradient.value && !Wt.includes(e.gradient.value) ? (d = zr.default[e.gradient.value], e.disabled.value || (i = zr.hover[e.gradient.value])) : console.warn(`cannot use outline prop with "${e.gradient.value}" gradient`);
    else if (e.gradient.value && n)
      d = Tr.default[e.gradient.value], e.disabled.value || (i = Tr.hover[e.gradient.value]);
    else if (l && a)
      if (qn.includes(e.color.value))
        console.warn(`cannot use outline prop with "${e.color.value}" color`);
      else {
        const h = e.color.value;
        d = Sr.default[h], e.disabled.value || (i = Sr.hover[h]);
      }
    else {
      const h = e.color.value;
      d = $r.default[h], e.disabled.value || (i = $r.hover[h]);
    }
    let u = "";
    return e.shadow.value === "" ? e.gradient.value && Wt.includes(e.gradient.value) && (u = Pr[e.gradient.value]) : typeof e.shadow.value == "string" && Wt.includes(e.shadow.value) && (u = Pr[e.shadow.value]), [
      d,
      i,
      u,
      e.pill.value && "!rounded-full",
      e.disabled.value && "cursor-not-allowed opacity-50",
      n && a ? "p-0.5" : r.value,
      (t.prefix || t.suffix || e.loading.value) && "inline-flex items-center",
      e.class.value
    ].filter((h) => h).join(" ");
  }), o = c(() => e.gradient.value && e.outline.value ? [
    "relative bg-white dark:bg-gray-900 rounded-md inline-flex items-center",
    r.value,
    e.disabled.value ? "" : "group-hover:bg-opacity-0 transition-all ease-in duration-75"
  ].filter((n) => n).join(" ") : "");
  return {
    wrapperClasses: s.value,
    spanClasses: o.value
  };
}
function Yn(e) {
  const t = {
    xs: "2.5",
    sm: "3",
    md: "4",
    lg: "5",
    xl: "6"
  }, r = c(() => t[e.size.value]);
  return {
    color: c(() => e.outline.value ? e.gradient.value ? e.gradient.value.includes("purple") ? "purple" : e.gradient.value.includes("blue") ? "blue" : e.gradient.value.includes("pink") ? "pink" : e.gradient.value.includes("red") ? "red" : "white" : ["alternative", "dark", "light"].includes(e.color.value) ? "white" : e.color.value === "default" ? "blue" : e.color.value : "white"),
    size: r
  };
}
const Kn = {
  0: "w-0 h-0",
  0.5: "w-0.5 h-0.5",
  1: "w-1 h-1",
  1.5: "w-1.5 h-1.5",
  10: "w-10 h-10",
  11: "w-11 h-11",
  12: "w-12 h-12",
  2: "w-2 h-2",
  2.5: "w-2.5 h-2.5",
  3: "w-3 h-3",
  4: "w-4 h-4",
  5: "w-5 h-5",
  6: "w-6 h-6",
  7: "w-7 h-7",
  8: "w-8 h-8",
  9: "w-9 h-9"
}, Jn = {
  blue: "fill-blue-600",
  gray: "fill-gray-600 dark:fill-gray-300",
  green: "fill-green-500",
  pink: "fill-pink-600",
  purple: "fill-purple-600",
  red: "fill-red-600",
  white: "fill-white",
  yellow: "fill-yellow-400"
};
function Xn(e) {
  const t = c(() => Kn[e.size.value]), r = c(() => Jn[e.color.value]), s = c(() => "text-gray-200 dark:text-gray-600"), o = c(() => "animate-spin");
  return { spinnerClasses: c(() => U(
    o.value,
    s.value,
    r.value,
    t.value
  )) };
}
const bt = /* @__PURE__ */ S({
  __name: "FwbSpinner",
  props: {
    color: { default: "blue" },
    size: { default: "4" }
  },
  setup(e) {
    const t = e, { spinnerClasses: r } = Xn(J(t));
    return (s, o) => (p(), b("svg", {
      class: C(x(r)),
      fill: "none",
      role: "status",
      viewBox: "0 0 100 101",
      xmlns: "http://www.w3.org/2000/svg"
    }, o[0] || (o[0] = [
      m("path", {
        d: "M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z",
        fill: "currentColor"
      }, null, -1),
      m("path", {
        d: "M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z",
        fill: "currentFill"
      }, null, -1)
    ]), 2));
  }
}), Zn = {
  key: 0,
  class: "mr-2"
}, Qn = {
  key: 0,
  class: "mr-2"
}, ea = {
  key: 1,
  class: "ml-2"
}, ta = {
  key: 1,
  class: "ml-2"
}, ra = /* @__PURE__ */ S({
  __name: "FwbButton",
  props: {
    class: { default: "" },
    color: { default: "default" },
    gradient: { default: null },
    size: { default: "md" },
    shadow: { type: [String, Boolean], default: !1 },
    pill: { type: Boolean, default: !1 },
    square: { type: Boolean, default: !1 },
    outline: { type: Boolean, default: !1 },
    loading: { type: Boolean, default: !1 },
    loadingPosition: { default: "prefix" },
    disabled: { type: Boolean, default: !1 },
    href: { default: "" },
    tag: { default: "a" }
  },
  setup(e) {
    const t = e, r = c(() => Un(J(t))), s = c(() => H(r.value.wrapperClasses)), o = c(() => H(r.value.spanClasses)), n = c(() => t.outline && t.gradient), l = c(() => t.loading && t.loadingPosition === "prefix"), a = c(() => t.loading && t.loadingPosition === "suffix"), { color: i, size: d } = Yn(J(t)), u = t.tag !== "a" ? ye(t.tag) : "a", h = t.href ? u : "button", y = t.tag === "router-link" || t.tag === "nuxt-link" ? "to" : "href";
    return (f, g) => (p(), W(re(x(h)), Ae({
      class: s.value,
      [x(y) || ""]: f.href,
      disabled: x(h) === "button" && f.disabled
    }), {
      default: D(() => [
        !n.value && (f.$slots.prefix || l.value) ? (p(), b("div", Zn, [
          l.value ? (p(), W(bt, {
            key: 0,
            color: x(i),
            size: x(d)
          }, null, 8, ["color", "size"])) : k(f.$slots, "prefix", { key: 1 })
        ])) : z("", !0),
        m("span", {
          class: C(o.value)
        }, [
          n.value && (f.$slots.prefix || l.value) ? (p(), b("span", Qn, [
            l.value ? (p(), W(bt, {
              key: 0,
              color: x(i),
              size: x(d)
            }, null, 8, ["color", "size"])) : k(f.$slots, "prefix", { key: 1 })
          ])) : z("", !0),
          k(f.$slots, "default"),
          n.value && (f.$slots.suffix || a.value) ? (p(), b("span", ea, [
            a.value ? (p(), W(bt, {
              key: 0,
              color: x(i),
              size: x(d)
            }, null, 8, ["color", "size"])) : k(f.$slots, "suffix", { key: 1 })
          ])) : z("", !0)
        ], 2),
        !n.value && (f.$slots.suffix || a.value) ? (p(), b("div", ta, [
          a.value ? (p(), W(bt, {
            key: 0,
            color: x(i),
            size: x(d)
          }, null, 8, ["color", "size"])) : k(f.$slots, "suffix", { key: 1 })
        ])) : z("", !0)
      ]),
      _: 3
    }, 16, ["class", "disabled"]));
  }
}), sa = {}, oa = {
  class: "fwb-button-group inline-flex rounded-md shadow-sm",
  role: "group"
};
function na(e, t) {
  return p(), b("div", oa, [
    k(e.$slots, "default")
  ]);
}
const tp = /* @__PURE__ */ we(sa, [["render", na]]);
function aa(e) {
  const t = c(() => {
    let s = "";
    return e.variant.value === "image" && (s = "max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"), e.variant.value === "default" ? s = "block max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 " : e.variant.value === "horizontal" && (s = "flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800"), e.href?.value && (s += " hover:bg-gray-100 dark:hover:bg-gray-700"), s;
  }), r = c(
    () => e.variant.value === "horizontal" ? "object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" : ""
  );
  return {
    cardClasses: t,
    horizontalImageClasses: r
  };
}
const la = ["alt", "src"], rp = /* @__PURE__ */ S({
  __name: "FwbCard",
  props: {
    href: {
      type: String,
      default: ""
    },
    imgAlt: {
      type: String,
      default: ""
    },
    imgSrc: {
      type: String,
      default: ""
    },
    variant: {
      type: String,
      default: "default"
    }
  },
  setup(e) {
    const t = e, { cardClasses: r, horizontalImageClasses: s } = aa(J(t)), o = c(() => t.href ? "a" : "div");
    return (n, l) => (p(), W(re(o.value), {
      class: C(x(r)),
      href: e.href
    }, {
      default: D(() => [
        e.imgSrc ? (p(), b("img", {
          key: 0,
          alt: e.imgAlt,
          class: C([x(s), "rounded-t-lg"]),
          src: e.imgSrc
        }, null, 10, la)) : z("", !0),
        m("div", null, [
          k(n.$slots, "default")
        ])
      ]),
      _: 3
    }, 8, ["class", "href"]));
  }
}), ia = { class: "relative" }, da = { class: "relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96" }, ua = ["alt", "src"], ca = {
  key: 0,
  class: "absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3"
}, fa = ["aria-label", "onClick"], sp = /* @__PURE__ */ S({
  __name: "FwbCarousel",
  props: {
    pictures: {
      type: Array,
      default() {
        return [];
      }
    },
    noIndicators: {
      type: Boolean,
      default: !1
    },
    noControls: {
      type: Boolean,
      default: !1
    },
    slide: {
      type: Boolean,
      default: !1
    },
    slideInterval: {
      type: Number,
      default: 3e3
    },
    animation: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, r = R(0), s = R(""), o = R(), n = () => {
      o.value = setInterval(function() {
        i();
      }, t.slideInterval);
    }, l = () => {
      clearInterval(o.value), n();
    }, a = (u) => {
      r.value = u, l();
    }, i = () => {
      r.value !== t.pictures.length - 1 ? r.value++ : r.value = 0, s.value = "right", l();
    }, d = () => {
      r.value !== 0 ? r.value-- : r.value = t.pictures.length - 1, s.value = "left", l();
    };
    return je(() => {
      t.slide && n();
    }), (u, h) => (p(), b("div", ia, [
      m("div", da, [
        (p(!0), b(K, null, Ee(e.pictures, (y, f) => (p(), b("div", {
          key: f,
          class: C([f === r.value ? "z-30" : "z-0", "absolute inset-0 -translate-y-0"])
        }, [
          m("img", {
            alt: y.alt,
            src: y.src,
            class: "absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
          }, null, 8, ua)
        ], 2))), 128))
      ]),
      e.noIndicators ? z("", !0) : (p(), b("div", ca, [
        (p(!0), b(K, null, Ee(e.pictures, (y, f) => (p(), b("button", {
          key: f,
          "aria-label": "Slide " + f,
          class: C([f === r.value ? "bg-white" : "bg-white/50", "size-3 rounded-full bg-white"]),
          "aria-current": "false",
          type: "button",
          onClick: xt((g) => a(f), ["prevent"])
        }, null, 10, fa))), 128))
      ])),
      e.noControls ? z("", !0) : (p(), b(K, { key: 1 }, [
        m("button", {
          class: "group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none",
          "data-carousel-prev": "",
          type: "button",
          onClick: xt(d, ["prevent"])
        }, h[0] || (h[0] = [
          m("span", { class: "inline-flex size-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:size-10" }, [
            m("svg", {
              class: "size-5 text-white dark:text-gray-800 sm:size-6",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              xmlns: "http://www.w3.org/2000/svg"
            }, [
              m("path", {
                d: "M15 19l-7-7 7-7",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": "2"
              })
            ]),
            m("span", { class: "hidden" }, "Previous")
          ], -1)
        ])),
        m("button", {
          class: "group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none",
          "data-carousel-next": "",
          type: "button",
          onClick: xt(i, ["prevent"])
        }, h[1] || (h[1] = [
          m("span", { class: "inline-flex size-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:size-10" }, [
            m("svg", {
              class: "size-5 text-white dark:text-gray-800 sm:size-6",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              xmlns: "http://www.w3.org/2000/svg"
            }, [
              m("path", {
                d: "M9 5l7 7-7 7",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": "2"
              })
            ]),
            m("span", { class: "hidden" }, "Next")
          ], -1)
        ]))
      ], 64))
    ]));
  }
});
function ys(e) {
  return so() ? (oo(e), !0) : !1;
}
const Gt = /* @__PURE__ */ new WeakMap(), pa = (...e) => {
  var t;
  const r = e[0], s = (t = Bt()) == null ? void 0 : t.proxy;
  if (s == null && !as())
    throw new Error("injectLocal must be called in setup");
  return s && Gt.has(s) && r in Gt.get(s) ? Gt.get(s)[r] : ee(...e);
}, ar = typeof window < "u" && typeof document < "u";
typeof WorkerGlobalScope < "u" && globalThis instanceof WorkerGlobalScope;
const ga = (e) => typeof e < "u", ha = Object.prototype.toString, ma = (e) => ha.call(e) === "[object Object]", qt = () => {
}, ba = /* @__PURE__ */ va();
function va() {
  var e, t;
  return ar && ((e = window?.navigator) == null ? void 0 : e.userAgent) && (/iP(?:ad|hone|od)/.test(window.navigator.userAgent) || ((t = window?.navigator) == null ? void 0 : t.maxTouchPoints) > 2 && /iPad|Macintosh/.test(window?.navigator.userAgent));
}
function ya(e, t) {
  var r;
  if (typeof e == "number")
    return e + t;
  const s = ((r = e.match(/^-?\d+\.?\d*/)) == null ? void 0 : r[0]) || "", o = e.slice(s.length), n = Number.parseFloat(s) + t;
  return Number.isNaN(n) ? e : n + o;
}
function ot(e) {
  return e.endsWith("rem") ? Number.parseFloat(e) * 16 : Number.parseFloat(e);
}
function wa(e) {
  return Bt();
}
function Ut(e) {
  return Array.isArray(e) ? e : [e];
}
function xa(e, t = !0, r) {
  wa() ? je(e, r) : t ? e() : Ft(e);
}
function ka(e, t, r = {}) {
  const {
    immediate: s = !0
  } = r, o = R(!1);
  let n = null;
  function l() {
    n && (clearTimeout(n), n = null);
  }
  function a() {
    o.value = !1, l();
  }
  function i(...d) {
    l(), o.value = !0, n = setTimeout(() => {
      o.value = !1, n = null, e(...d);
    }, Q(t));
  }
  return s && (o.value = !0, ar && i()), ys(a), {
    isPending: ro(o),
    start: i,
    stop: a
  };
}
function Ca(e = !1, t = {}) {
  const {
    truthyValue: r = !0,
    falsyValue: s = !1
  } = t, o = or(e), n = R(e);
  function l(a) {
    if (arguments.length)
      return n.value = a, n.value;
    {
      const i = Q(r);
      return n.value = n.value === i ? Q(s) : i, n.value;
    }
  }
  return o ? l : [n, l];
}
function _a(e, t, r) {
  return Le(
    e,
    t,
    {
      ...r,
      immediate: !0
    }
  );
}
const It = ar ? window : void 0;
function rt(e) {
  var t;
  const r = Q(e);
  return (t = r?.$el) != null ? t : r;
}
function We(...e) {
  const t = [], r = () => {
    t.forEach((a) => a()), t.length = 0;
  }, s = (a, i, d, u) => (a.addEventListener(i, d, u), () => a.removeEventListener(i, d, u)), o = c(() => {
    const a = Ut(Q(e[0])).filter((i) => i != null);
    return a.every((i) => typeof i != "string") ? a : void 0;
  }), n = _a(
    () => {
      var a, i;
      return [
        (i = (a = o.value) == null ? void 0 : a.map((d) => rt(d))) != null ? i : [It].filter((d) => d != null),
        Ut(Q(o.value ? e[1] : e[0])),
        Ut(x(o.value ? e[2] : e[1])),
        // @ts-expect-error - TypeScript gets the correct types, but somehow still complains
        Q(o.value ? e[3] : e[2])
      ];
    },
    ([a, i, d, u]) => {
      if (r(), !a?.length || !i?.length || !d?.length)
        return;
      const h = ma(u) ? { ...u } : u;
      t.push(
        ...a.flatMap(
          (y) => i.flatMap(
            (f) => d.map((g) => s(y, f, g, h))
          )
        )
      );
    },
    { flush: "post" }
  ), l = () => {
    n(), r();
  };
  return ys(r), l;
}
let Ar = !1;
function $a(e, t, r = {}) {
  const { window: s = It, ignore: o = [], capture: n = !0, detectIframe: l = !1 } = r;
  if (!s)
    return qt;
  if (ba && !Ar) {
    Ar = !0;
    const v = { passive: !0 };
    Array.from(s.document.body.children).forEach((w) => We(w, "click", qt, v)), We(s.document.documentElement, "click", qt, v);
  }
  let a = !0;
  const i = (v) => Q(o).some((w) => {
    if (typeof w == "string")
      return Array.from(s.document.querySelectorAll(w)).some(($) => $ === v.target || v.composedPath().includes($));
    {
      const $ = rt(w);
      return $ && (v.target === $ || v.composedPath().includes($));
    }
  });
  function d(v) {
    const w = Q(v);
    return w && w.$.subTree.shapeFlag === 16;
  }
  function u(v, w) {
    const $ = Q(v), T = $.$.subTree && $.$.subTree.children;
    return T == null || !Array.isArray(T) ? !1 : T.some((P) => P.el === w.target || w.composedPath().includes(P.el));
  }
  const h = (v) => {
    const w = rt(e);
    if (v.target != null && !(!(w instanceof Element) && d(e) && u(e, v)) && !(!w || w === v.target || v.composedPath().includes(w))) {
      if (v.detail === 0 && (a = !i(v)), !a) {
        a = !0;
        return;
      }
      t(v);
    }
  };
  let y = !1;
  const f = [
    We(s, "click", (v) => {
      y || (y = !0, setTimeout(() => {
        y = !1;
      }, 0), h(v));
    }, { passive: !0, capture: n }),
    We(s, "pointerdown", (v) => {
      const w = rt(e);
      a = !i(v) && !!(w && !v.composedPath().includes(w));
    }, { passive: !0 }),
    l && We(s, "blur", (v) => {
      setTimeout(() => {
        var w;
        const $ = rt(e);
        ((w = s.document.activeElement) == null ? void 0 : w.tagName) === "IFRAME" && !$?.contains(s.document.activeElement) && t(v);
      }, 0);
    }, { passive: !0 })
  ].filter(Boolean);
  return () => f.forEach((v) => v());
}
function Sa() {
  const e = R(!1), t = Bt();
  return t && je(() => {
    e.value = !0;
  }, t), e;
}
function Ta(e) {
  const t = Sa();
  return c(() => (t.value, !!e()));
}
const za = Symbol("vueuse-ssr-width");
function ws() {
  const e = as() ? pa(za, null) : null;
  return typeof e == "number" ? e : void 0;
}
function et(e, t = {}) {
  const { window: r = It, ssrWidth: s = ws() } = t, o = Ta(() => r && "matchMedia" in r && typeof r.matchMedia == "function"), n = R(typeof s == "number"), l = no(), a = R(!1), i = (d) => {
    a.value = d.matches;
  };
  return ao(() => {
    if (n.value) {
      n.value = !o.value;
      const d = Q(e).split(",");
      a.value = d.some((u) => {
        const h = u.includes("not all"), y = u.match(/\(\s*min-width:\s*(-?\d+(?:\.\d*)?[a-z]+\s*)\)/), f = u.match(/\(\s*max-width:\s*(-?\d+(?:\.\d*)?[a-z]+\s*)\)/);
        let g = !!(y || f);
        return y && g && (g = s >= ot(y[1])), f && g && (g = s <= ot(f[1])), h ? !g : g;
      });
      return;
    }
    o.value && (l.value = r.matchMedia(Q(e)), a.value = l.value.matches);
  }), We(l, "change", i, { passive: !0 }), c(() => a.value);
}
const xs = {
  sm: 640,
  md: 768,
  lg: 1024,
  xl: 1280,
  "2xl": 1536
};
function ks(e, t = {}) {
  function r(f, g) {
    let v = Q(e[Q(f)]);
    return g != null && (v = ya(v, g)), typeof v == "number" && (v = `${v}px`), v;
  }
  const { window: s = It, strategy: o = "min-width", ssrWidth: n = ws() } = t, l = typeof n == "number", a = l ? R(!1) : { value: !0 };
  l && xa(() => a.value = !!s);
  function i(f, g) {
    return !a.value && l ? f === "min" ? n >= ot(g) : n <= ot(g) : s ? s.matchMedia(`(${f}-width: ${g})`).matches : !1;
  }
  const d = (f) => et(() => `(min-width: ${r(f)})`, t), u = (f) => et(() => `(max-width: ${r(f)})`, t), h = Object.keys(e).reduce((f, g) => (Object.defineProperty(f, g, {
    get: () => o === "min-width" ? d(g) : u(g),
    enumerable: !0,
    configurable: !0
  }), f), {});
  function y() {
    const f = Object.keys(e).map((g) => [g, h[g], ot(r(g))]).sort((g, v) => g[2] - v[2]);
    return c(() => f.filter(([, g]) => g.value).map(([g]) => g));
  }
  return Object.assign(h, {
    greaterOrEqual: d,
    smallerOrEqual: u,
    greater(f) {
      return et(() => `(min-width: ${r(f, 0.1)})`, t);
    },
    smaller(f) {
      return et(() => `(max-width: ${r(f, -0.1)})`, t);
    },
    between(f, g) {
      return et(() => `(min-width: ${r(f)}) and (max-width: ${r(g, -0.1)})`, t);
    },
    isGreater(f) {
      return i("min", r(f, 0.1));
    },
    isGreaterOrEqual(f) {
      return i("min", r(f));
    },
    isSmaller(f) {
      return i("max", r(f, -0.1));
    },
    isSmallerOrEqual(f) {
      return i("max", r(f));
    },
    isInBetween(f, g) {
      return i("min", r(f)) && i("max", r(g, -0.1));
    },
    current: y,
    active() {
      const f = y();
      return c(() => f.value.length === 0 ? "" : f.value.at(o === "min-width" ? -1 : 0));
    }
  });
}
function Pa(e) {
  return JSON.parse(JSON.stringify(e));
}
function Cs(e, t, r, s = {}) {
  var o, n, l;
  const {
    clone: a = !1,
    passive: i = !1,
    eventName: d,
    deep: u = !1,
    defaultValue: h,
    shouldEmit: y
  } = s, f = Bt(), g = r || f?.emit || ((o = f?.$emit) == null ? void 0 : o.bind(f)) || ((l = (n = f?.proxy) == null ? void 0 : n.$emit) == null ? void 0 : l.bind(f?.proxy));
  let v = d;
  v = v || `update:${t.toString()}`;
  const w = (P) => a ? typeof a == "function" ? a(P) : Pa(P) : P, $ = () => ga(e[t]) ? w(e[t]) : h, T = (P) => {
    y ? y(P) && g(v, P) : g(v, P);
  };
  if (i) {
    const P = $(), M = R(P);
    let _ = !1;
    return Le(
      () => e[t],
      (I) => {
        _ || (_ = !0, M.value = w(I), Ft(() => _ = !1));
      }
    ), Le(
      M,
      (I) => {
        !_ && (I !== e[t] || u) && T(I);
      },
      { deep: u }
    ), M;
  } else
    return c({
      get() {
        return $();
      },
      set(P) {
        T(P);
      }
    });
}
const Aa = "fwb-dropdown inline-flex relative", Fa = "absolute z-10 bg-white rounded shadow dark:bg-gray-700", vt = 8, Ba = {
  horizontal: "left-0",
  vertical: "top-0",
  horizontal_reverse: "right-0",
  vertical_reverse: "bottom-0"
}, Ma = {
  bottom: "",
  left: "rotate-90",
  right: "-rotate-90",
  top: "rotate-180"
}, Ia = {
  bottom: (e) => `bottom: -${e.height + vt}px;`,
  left: (e) => `left: -${e.width + vt}px;`,
  right: (e) => `right: -${e.width + vt}px;`,
  top: (e) => `top: -${e.height + vt}px;`
};
function Oa({ contentWrapper: e, isContentVisible: t, props: r }) {
  const s = r.alignToEnd, o = r.placement, n = r.contentWrapperClass ?? "", l = r.triggerWrapperClass ?? "", a = r.class ?? "", i = c(() => {
    let w = "";
    return t.value && (w += " fwb-dropdown-active"), H([Aa, w, a]);
  }), d = c(() => {
    let w = ["top", "bottom"].includes(o) ? "horizontal" : "vertical";
    return s && (w = `${w}_reverse`), H([
      Fa,
      Ba[w],
      n
    ]);
  }), u = c(() => H([l])), h = "", y = c(
    () => H([
      Ma[o],
      o === "left" ? "mr-2" : ""
    ])
  ), f = R(""), g = () => {
    const w = e.value?.getBoundingClientRect();
    f.value = w ? Ia[o](w) : "";
  }, v = new MutationObserver(() => {
    g();
  });
  return Le(t, (w) => {
    w && Ft(() => g());
  }), Le(
    e,
    (w) => {
      w ? v.observe(w, {
        childList: !0,
        subtree: !0
      }) : v.disconnect();
    }
  ), {
    contentStyles: f,
    contentWrapperClasses: d,
    triggerClasses: h,
    triggerSuffixClass: y,
    triggerWrapperClasses: u,
    wrapperClasses: i
  };
}
var La = typeof global == "object" && global && global.Object === Object && global, Ea = typeof self == "object" && self && self.Object === Object && self, lr = La || Ea || Function("return this")(), ze = lr.Symbol, _s = Object.prototype, Ra = _s.hasOwnProperty, Na = _s.toString, tt = ze ? ze.toStringTag : void 0;
function ja(e) {
  var t = Ra.call(e, tt), r = e[tt];
  try {
    e[tt] = void 0;
    var s = !0;
  } catch {
  }
  var o = Na.call(e);
  return s && (t ? e[tt] = r : delete e[tt]), o;
}
var Va = Object.prototype, Da = Va.toString;
function Ha(e) {
  return Da.call(e);
}
var Wa = "[object Null]", Ga = "[object Undefined]", Fr = ze ? ze.toStringTag : void 0;
function ir(e) {
  return e == null ? e === void 0 ? Ga : Wa : Fr && Fr in Object(e) ? ja(e) : Ha(e);
}
function dr(e) {
  return e != null && typeof e == "object";
}
var qa = "[object Symbol]";
function ur(e) {
  return typeof e == "symbol" || dr(e) && ir(e) == qa;
}
function Ua(e, t) {
  for (var r = -1, s = e == null ? 0 : e.length, o = Array(s); ++r < s; )
    o[r] = t(e[r], r, e);
  return o;
}
var Je = Array.isArray, Br = ze ? ze.prototype : void 0, Mr = Br ? Br.toString : void 0;
function $s(e) {
  if (typeof e == "string")
    return e;
  if (Je(e))
    return Ua(e, $s) + "";
  if (ur(e))
    return Mr ? Mr.call(e) : "";
  var t = e + "";
  return t == "0" && 1 / e == -1 / 0 ? "-0" : t;
}
function _t(e) {
  var t = typeof e;
  return e != null && (t == "object" || t == "function");
}
function Ya(e) {
  return e;
}
var Ka = "[object AsyncFunction]", Ja = "[object Function]", Xa = "[object GeneratorFunction]", Za = "[object Proxy]";
function Qa(e) {
  if (!_t(e))
    return !1;
  var t = ir(e);
  return t == Ja || t == Xa || t == Ka || t == Za;
}
var Yt = lr["__core-js_shared__"], Ir = function() {
  var e = /[^.]+$/.exec(Yt && Yt.keys && Yt.keys.IE_PROTO || "");
  return e ? "Symbol(src)_1." + e : "";
}();
function el(e) {
  return !!Ir && Ir in e;
}
var tl = Function.prototype, rl = tl.toString;
function sl(e) {
  if (e != null) {
    try {
      return rl.call(e);
    } catch {
    }
    try {
      return e + "";
    } catch {
    }
  }
  return "";
}
var ol = /[\\^$.*+?()[\]{}|]/g, nl = /^\[object .+?Constructor\]$/, al = Function.prototype, ll = Object.prototype, il = al.toString, dl = ll.hasOwnProperty, ul = RegExp(
  "^" + il.call(dl).replace(ol, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$"
);
function cl(e) {
  if (!_t(e) || el(e))
    return !1;
  var t = Qa(e) ? ul : nl;
  return t.test(sl(e));
}
function fl(e, t) {
  return e?.[t];
}
function cr(e, t) {
  var r = fl(e, t);
  return cl(r) ? r : void 0;
}
function pl(e, t, r) {
  switch (r.length) {
    case 0:
      return e.call(t);
    case 1:
      return e.call(t, r[0]);
    case 2:
      return e.call(t, r[0], r[1]);
    case 3:
      return e.call(t, r[0], r[1], r[2]);
  }
  return e.apply(t, r);
}
var gl = 800, hl = 16, ml = Date.now;
function bl(e) {
  var t = 0, r = 0;
  return function() {
    var s = ml(), o = hl - (s - r);
    if (r = s, o > 0) {
      if (++t >= gl)
        return arguments[0];
    } else
      t = 0;
    return e.apply(void 0, arguments);
  };
}
function vl(e) {
  return function() {
    return e;
  };
}
var $t = function() {
  try {
    var e = cr(Object, "defineProperty");
    return e({}, "", {}), e;
  } catch {
  }
}(), yl = $t ? function(e, t) {
  return $t(e, "toString", {
    configurable: !0,
    enumerable: !1,
    value: vl(t),
    writable: !0
  });
} : Ya, wl = bl(yl), xl = 9007199254740991, kl = /^(?:0|[1-9]\d*)$/;
function Ss(e, t) {
  var r = typeof e;
  return t = t ?? xl, !!t && (r == "number" || r != "symbol" && kl.test(e)) && e > -1 && e % 1 == 0 && e < t;
}
function Cl(e, t, r) {
  t == "__proto__" && $t ? $t(e, t, {
    configurable: !0,
    enumerable: !0,
    value: r,
    writable: !0
  }) : e[t] = r;
}
function Ts(e, t) {
  return e === t || e !== e && t !== t;
}
var _l = Object.prototype, $l = _l.hasOwnProperty;
function Sl(e, t, r) {
  var s = e[t];
  (!($l.call(e, t) && Ts(s, r)) || r === void 0 && !(t in e)) && Cl(e, t, r);
}
var Or = Math.max;
function Tl(e, t, r) {
  return t = Or(t === void 0 ? e.length - 1 : t, 0), function() {
    for (var s = arguments, o = -1, n = Or(s.length - t, 0), l = Array(n); ++o < n; )
      l[o] = s[t + o];
    o = -1;
    for (var a = Array(t + 1); ++o < t; )
      a[o] = s[o];
    return a[t] = r(l), pl(e, this, a);
  };
}
var zl = 9007199254740991;
function Pl(e) {
  return typeof e == "number" && e > -1 && e % 1 == 0 && e <= zl;
}
var Al = "[object Arguments]";
function Lr(e) {
  return dr(e) && ir(e) == Al;
}
var zs = Object.prototype, Fl = zs.hasOwnProperty, Bl = zs.propertyIsEnumerable, Ps = Lr(/* @__PURE__ */ function() {
  return arguments;
}()) ? Lr : function(e) {
  return dr(e) && Fl.call(e, "callee") && !Bl.call(e, "callee");
}, Ml = /\.|\[(?:[^[\]]*|(["'])(?:(?!\1)[^\\]|\\.)*?\1)\]/, Il = /^\w*$/;
function Ol(e, t) {
  if (Je(e))
    return !1;
  var r = typeof e;
  return r == "number" || r == "symbol" || r == "boolean" || e == null || ur(e) ? !0 : Il.test(e) || !Ml.test(e) || t != null && e in Object(t);
}
var dt = cr(Object, "create");
function Ll() {
  this.__data__ = dt ? dt(null) : {}, this.size = 0;
}
function El(e) {
  var t = this.has(e) && delete this.__data__[e];
  return this.size -= t ? 1 : 0, t;
}
var Rl = "__lodash_hash_undefined__", Nl = Object.prototype, jl = Nl.hasOwnProperty;
function Vl(e) {
  var t = this.__data__;
  if (dt) {
    var r = t[e];
    return r === Rl ? void 0 : r;
  }
  return jl.call(t, e) ? t[e] : void 0;
}
var Dl = Object.prototype, Hl = Dl.hasOwnProperty;
function Wl(e) {
  var t = this.__data__;
  return dt ? t[e] !== void 0 : Hl.call(t, e);
}
var Gl = "__lodash_hash_undefined__";
function ql(e, t) {
  var r = this.__data__;
  return this.size += this.has(e) ? 0 : 1, r[e] = dt && t === void 0 ? Gl : t, this;
}
function Re(e) {
  var t = -1, r = e == null ? 0 : e.length;
  for (this.clear(); ++t < r; ) {
    var s = e[t];
    this.set(s[0], s[1]);
  }
}
Re.prototype.clear = Ll;
Re.prototype.delete = El;
Re.prototype.get = Vl;
Re.prototype.has = Wl;
Re.prototype.set = ql;
function Ul() {
  this.__data__ = [], this.size = 0;
}
function Ot(e, t) {
  for (var r = e.length; r--; )
    if (Ts(e[r][0], t))
      return r;
  return -1;
}
var Yl = Array.prototype, Kl = Yl.splice;
function Jl(e) {
  var t = this.__data__, r = Ot(t, e);
  if (r < 0)
    return !1;
  var s = t.length - 1;
  return r == s ? t.pop() : Kl.call(t, r, 1), --this.size, !0;
}
function Xl(e) {
  var t = this.__data__, r = Ot(t, e);
  return r < 0 ? void 0 : t[r][1];
}
function Zl(e) {
  return Ot(this.__data__, e) > -1;
}
function Ql(e, t) {
  var r = this.__data__, s = Ot(r, e);
  return s < 0 ? (++this.size, r.push([e, t])) : r[s][1] = t, this;
}
function Xe(e) {
  var t = -1, r = e == null ? 0 : e.length;
  for (this.clear(); ++t < r; ) {
    var s = e[t];
    this.set(s[0], s[1]);
  }
}
Xe.prototype.clear = Ul;
Xe.prototype.delete = Jl;
Xe.prototype.get = Xl;
Xe.prototype.has = Zl;
Xe.prototype.set = Ql;
var ei = cr(lr, "Map");
function ti() {
  this.size = 0, this.__data__ = {
    hash: new Re(),
    map: new (ei || Xe)(),
    string: new Re()
  };
}
function ri(e) {
  var t = typeof e;
  return t == "string" || t == "number" || t == "symbol" || t == "boolean" ? e !== "__proto__" : e === null;
}
function Lt(e, t) {
  var r = e.__data__;
  return ri(t) ? r[typeof t == "string" ? "string" : "hash"] : r.map;
}
function si(e) {
  var t = Lt(this, e).delete(e);
  return this.size -= t ? 1 : 0, t;
}
function oi(e) {
  return Lt(this, e).get(e);
}
function ni(e) {
  return Lt(this, e).has(e);
}
function ai(e, t) {
  var r = Lt(this, e), s = r.size;
  return r.set(e, t), this.size += r.size == s ? 0 : 1, this;
}
function Ve(e) {
  var t = -1, r = e == null ? 0 : e.length;
  for (this.clear(); ++t < r; ) {
    var s = e[t];
    this.set(s[0], s[1]);
  }
}
Ve.prototype.clear = ti;
Ve.prototype.delete = si;
Ve.prototype.get = oi;
Ve.prototype.has = ni;
Ve.prototype.set = ai;
var li = "Expected a function";
function fr(e, t) {
  if (typeof e != "function" || t != null && typeof t != "function")
    throw new TypeError(li);
  var r = function() {
    var s = arguments, o = t ? t.apply(this, s) : s[0], n = r.cache;
    if (n.has(o))
      return n.get(o);
    var l = e.apply(this, s);
    return r.cache = n.set(o, l) || n, l;
  };
  return r.cache = new (fr.Cache || Ve)(), r;
}
fr.Cache = Ve;
var ii = 500;
function di(e) {
  var t = fr(e, function(s) {
    return r.size === ii && r.clear(), s;
  }), r = t.cache;
  return t;
}
var ui = /[^.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|$))/g, ci = /\\(\\)?/g, fi = di(function(e) {
  var t = [];
  return e.charCodeAt(0) === 46 && t.push(""), e.replace(ui, function(r, s, o, n) {
    t.push(o ? n.replace(ci, "$1") : s || r);
  }), t;
});
function pi(e) {
  return e == null ? "" : $s(e);
}
function Et(e, t) {
  return Je(e) ? e : Ol(e, t) ? [e] : fi(pi(e));
}
function pr(e) {
  if (typeof e == "string" || ur(e))
    return e;
  var t = e + "";
  return t == "0" && 1 / e == -1 / 0 ? "-0" : t;
}
function gi(e, t) {
  t = Et(t, e);
  for (var r = 0, s = t.length; e != null && r < s; )
    e = e[pr(t[r++])];
  return r && r == s ? e : void 0;
}
function hi(e, t) {
  for (var r = -1, s = t.length, o = e.length; ++r < s; )
    e[o + r] = t[r];
  return e;
}
var Er = ze ? ze.isConcatSpreadable : void 0;
function mi(e) {
  return Je(e) || Ps(e) || !!(Er && e && e[Er]);
}
function bi(e, t, r, s, o) {
  var n = -1, l = e.length;
  for (r || (r = mi), o || (o = []); ++n < l; ) {
    var a = e[n];
    r(a) ? hi(o, a) : o[o.length] = a;
  }
  return o;
}
function vi(e) {
  var t = e == null ? 0 : e.length;
  return t ? bi(e) : [];
}
function yi(e) {
  return wl(Tl(e, void 0, vi), e + "");
}
function wi(e, t) {
  return e != null && t in Object(e);
}
function xi(e, t, r) {
  t = Et(t, e);
  for (var s = -1, o = t.length, n = !1; ++s < o; ) {
    var l = pr(t[s]);
    if (!(n = e != null && r(e, l)))
      break;
    e = e[l];
  }
  return n || ++s != o ? n : (o = e == null ? 0 : e.length, !!o && Pl(o) && Ss(l, o) && (Je(e) || Ps(e)));
}
function ki(e, t) {
  return e != null && xi(e, t, wi);
}
function Ci(e, t, r, s) {
  if (!_t(e))
    return e;
  t = Et(t, e);
  for (var o = -1, n = t.length, l = n - 1, a = e; a != null && ++o < n; ) {
    var i = pr(t[o]), d = r;
    if (i === "__proto__" || i === "constructor" || i === "prototype")
      return e;
    if (o != l) {
      var u = a[i];
      d = void 0, d === void 0 && (d = _t(u) ? u : Ss(t[o + 1]) ? [] : {});
    }
    Sl(a, i, d), a = a[i];
  }
  return e;
}
function _i(e, t, r) {
  for (var s = -1, o = t.length, n = {}; ++s < o; ) {
    var l = t[s], a = gi(e, l);
    r(a, l) && Ci(n, Et(l, e), a);
  }
  return n;
}
function $i(e, t) {
  return _i(e, t, function(r, s) {
    return ki(e, s);
  });
}
var Si = yi(function(e, t) {
  return e == null ? {} : $i(e, t);
});
function St(e, t = !0, r = []) {
  return e.forEach((s) => {
    if (s !== null) {
      if (typeof s != "object") {
        (typeof s == "string" || typeof s == "number") && r.push(ne(String(s)));
        return;
      }
      if (Array.isArray(s)) {
        St(s, t, r);
        return;
      }
      if (s.type === K) {
        if (s.children === null)
          return;
        Array.isArray(s.children) && St(s.children, t, r);
      } else s.type !== lo && r.push(s);
    }
  }), r;
}
function Ti(e, t = "default", r = void 0) {
  const s = e[t];
  if (!s)
    return console.warn("getFirstSlotVNode", `slot[${t}] is empty`), null;
  const o = St(s(r));
  return o.length === 1 ? o[0] : (console.warn("getFirstSlotVNode", `slot[${t}] should have exactly one child`), null);
}
const zi = {
  focus: ["onFocus", "onBlur"],
  click: ["onClick"],
  hover: ["onMouseenter", "onMouseleave"]
};
function Pi(e, t) {
  Object.entries(zi).forEach(([, r]) => {
    r.forEach((s) => {
      e.props ? e.props = Object.assign({}, e.props) : e.props = {};
      const o = e.props[s], n = t[s];
      o ? e.props[s] = (...l) => {
        o(...l), n(...l);
      } : e.props[s] = n;
    });
  });
}
const Rr = S({
  name: "SlotListener",
  props: {
    trigger: {
      type: String,
      default: "click"
    }
  },
  emits: ["click", "focus", "blur", "mouseenter", "mouseleave"],
  setup(e, { emit: t }) {
    return {
      handleClick: (a) => {
        t("click", a);
      },
      handleBlur: (a) => {
        t("blur", a);
      },
      handleFocus: (a) => {
        t("focus", a);
      },
      handleMouseLeave: (a) => {
        t("mouseleave", a);
      },
      handleMouseEnter: (a) => {
        t("mouseenter", a);
      }
    };
  },
  render() {
    const {
      $slots: e
    } = this, t = {
      onClick: this.handleClick,
      onMouseenter: this.handleMouseEnter,
      onMouseleave: this.handleMouseLeave,
      onFocus: this.handleFocus,
      onBlur: this.handleBlur
    }, r = Ti(e, "default"), s = [
      t
    ];
    return r?.props && s.push(
      Si(r.props, "onClick", "onMouseenter", "onMouseleave", "onFocus", "onBlur")
    ), r && Pi(
      r,
      {
        onBlur: (n) => {
          s.forEach((l) => {
            l?.onBlur?.(n);
          });
        },
        onFocus: (n) => {
          s.forEach((l) => {
            l?.onFocus?.(n);
          });
        },
        onClick: (n) => {
          s.forEach((l) => {
            l?.onClick?.(n);
          });
        },
        onMouseenter: (n) => {
          s.forEach((l) => {
            l?.onMouseenter?.(n);
          });
        },
        onMouseleave: (n) => {
          s.forEach((l) => {
            l?.onMouseleave?.(n);
          });
        }
      }
    ), r;
  }
}), op = /* @__PURE__ */ S({
  __name: "FwbDropdown",
  props: {
    alignToEnd: { type: Boolean, default: !1 },
    class: { default: "" },
    closeInside: { type: Boolean, default: !1 },
    color: { default: "default" },
    contentWrapperClass: { default: "" },
    disabled: { type: Boolean, default: !1 },
    placement: { default: "bottom" },
    text: { default: "Dropdown" },
    transition: { default: "" },
    triggerClass: { default: "" },
    triggerWrapperClass: { default: "" }
  },
  emits: ["show", "hide"],
  setup(e, { emit: t }) {
    const r = e, s = R(), o = R(), n = R(!1), l = () => n.value = !n.value, a = () => r.closeInside && (n.value = !1);
    $a(
      s,
      () => n.value && (n.value = !1)
    );
    const i = t;
    Le(n, () => {
      n.value ? i("show") : i("hide");
    });
    const d = {
      bottom: "to-bottom",
      left: "to-left",
      right: "to-right",
      top: "to-top"
    }, u = c(
      () => r.transition ? r.transition : d[r.placement]
    ), {
      contentStyles: h,
      contentWrapperClasses: y,
      triggerSuffixClass: f,
      triggerWrapperClasses: g,
      wrapperClasses: v
    } = Oa({ contentWrapper: o, isContentVisible: n, props: r });
    return (w, $) => (p(), b("div", {
      ref_key: "dropdownWrapper",
      ref: s,
      class: C(x(v))
    }, [
      m("div", {
        class: C(x(g))
      }, [
        Ie(Rr, { onClick: l }, {
          default: D(() => [
            k(w.$slots, "trigger", {}, () => [
              Ie(ra, {
                "aria-expanded": n.value,
                class: C([w.placement === "left" ? ["flex-row-reverse", "pl-2"] : "", w.triggerClass]),
                color: w.color,
                disabled: w.disabled,
                "aria-haspopup": "true",
                role: "button"
              }, {
                suffix: D(() => [
                  (p(), b("svg", {
                    class: C([x(f), "size-4"]),
                    fill: "none",
                    stroke: "currentColor",
                    viewBox: "0 0 24 24",
                    xmlns: "http://www.w3.org/2000/svg"
                  }, $[0] || ($[0] = [
                    m("path", {
                      d: "M19 9l-7 7-7-7",
                      "stroke-linecap": "round",
                      "stroke-linejoin": "round",
                      "stroke-width": "2"
                    }, null, -1)
                  ]), 2))
                ]),
                default: D(() => [
                  ne(O(w.text) + " ", 1)
                ]),
                _: 1
              }, 8, ["aria-expanded", "class", "color", "disabled"])
            ])
          ]),
          _: 3
        })
      ], 2),
      Ie(ls, { name: u.value }, {
        default: D(() => [
          n.value ? (p(), b("div", {
            key: 0,
            ref_key: "contentWrapper",
            ref: o,
            class: C(x(y)),
            style: st(x(h))
          }, [
            Ie(Rr, { onClick: a }, {
              default: D(() => [
                k(w.$slots, "default")
              ]),
              _: 3
            })
          ], 6)) : z("", !0)
        ]),
        _: 3
      }, 8, ["name"])
    ], 2));
  }
}), np = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooter",
  props: {
    sticky: { type: Boolean, default: !1 },
    footerType: { default: "default" }
  },
  setup(e) {
    const t = e, r = ie(), s = E(
      t.footerType === "sitemap" && "bg-gray-800",
      t.footerType === "socialmedia" && "p-4 bg-white sm:p-6 dark:bg-gray-800",
      t.footerType === "logo" && "p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800",
      t.footerType === "default" && "p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800",
      t.sticky && "absolute bottom-0 left-0 z-20 w-full border-t border-gray-200 dark:border-gray-600",
      r.class
    );
    return (o, n) => (p(), b("footer", te(o.$attrs, { class: x(s) }), [
      k(o.$slots, "default")
    ], 16));
  }
}), Ai = ["href"], Fi = ["alt", "src"], ap = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooterBrand",
  props: {
    href: { default: "" },
    src: { default: "" },
    alt: { default: "" },
    name: { default: "" },
    imageClass: { default: "" },
    nameClass: { default: "" },
    aClass: { default: "" }
  },
  setup(e) {
    const t = ie(), r = e, s = E("mb-6 md:mb-0", t.class), o = E("flex items-center", r.aClass), n = E("h-8 mr-3", r.imageClass), l = E("self-center text-2xl font-semibold whitespace-nowrap dark:text-white", r.nameClass);
    return (a, i) => (p(), b("div", te({ class: x(s) }, a.$attrs), [
      m("a", {
        class: C(x(o)),
        href: a.href
      }, [
        m("img", {
          alt: a.alt,
          class: C(x(n)),
          src: a.src
        }, null, 10, Fi),
        m("span", {
          class: C(x(l))
        }, O(a.name), 3)
      ], 10, Ai)
    ], 16));
  }
}), lp = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooterCopyright",
  props: {
    year: { default: (/* @__PURE__ */ new Date()).getFullYear() },
    by: { default: "" },
    href: { default: "" },
    aClass: { default: "" },
    copyrightMessage: { default: "All Rights Reserved." }
  },
  setup(e) {
    const t = e, r = ie(), s = E("block text-sm text-gray-500 sm:text-center dark:text-gray-400", r.class), o = E(t.href ? "hover:underline" : "ml-1", t.aClass), n = t.href ? "a" : "span";
    return (l, a) => (p(), b("span", te(l.$attrs, { class: x(s) }), [
      ne(" © " + O(l.year) + " ", 1),
      (p(), W(re(x(n)), {
        class: C(x(o)),
        href: l.href
      }, {
        default: D(() => [
          ne(O(l.by), 1)
        ]),
        _: 1
      }, 8, ["class", "href"])),
      ne(" " + O(l.copyrightMessage), 1)
    ], 16));
  }
}), Bi = { class: "sr-only" }, ip = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooterIcon",
  props: {
    href: { default: "" },
    ariaLabel: { default: "" },
    srText: { default: "" }
  },
  setup(e) {
    const t = ie(), s = e.href ? "a" : "span", o = E("text-gray-500 hover:text-gray-900 dark:hover:text-white", t.class);
    return (n, l) => (p(), W(re(x(s)), te({
      "aria-label": n.ariaLabel,
      class: x(o),
      href: n.href
    }, n.$attrs), {
      default: D(() => [
        k(n.$slots, "default"),
        m("span", Bi, O(n.srText), 1)
      ]),
      _: 3
    }, 16, ["aria-label", "class", "href"]));
  }
}), dp = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooterLink",
  props: {
    href: { default: "" },
    aClass: { default: "" },
    component: { default: "a" }
  },
  setup(e) {
    const t = ie(), r = e, s = r.component === "a" ? "a" : ye(r.component), o = r.component === "router-link" ? "to" : "href", n = E("hover:underline", r.aClass), l = E("mr-4 md:mr-6 last:mr-0", t.class);
    return (a, i) => (p(), b("li", te(a.$attrs, { class: x(l) }), [
      (p(), W(re(x(s)), Ae({
        [x(o) || ""]: a.href,
        class: x(n)
      }), {
        default: D(() => [
          k(a.$slots, "default")
        ]),
        _: 3
      }, 16, ["class"]))
    ], 16));
  }
}), up = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbFooterLinkGroup",
  setup(e) {
    const t = ie(), r = E("flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0", t.class);
    return (s, o) => (p(), b("ul", te(s.$attrs, { class: x(r) }), [
      k(s.$slots, "default")
    ], 16));
  }
}), cp = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbJumbotron",
  props: {
    headerLevel: { default: 1 },
    subText: { default: "" },
    subTextClasses: { default: "" },
    headerText: { default: "" },
    headerClasses: { default: "" }
  },
  setup(e) {
    const t = e, r = ie(), s = c(() => E(
      "bg-white dark:bg-gray-900 py-8 lg:py-16 px-4 mx-auto max-w-screen-xl text-center ",
      r.class
    )), o = c(() => E("mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white", t.headerClasses)), n = c(() => E("mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-0 lg:px-16 dark:text-gray-400", t.subTextClasses));
    return (l, a) => (p(), b("div", te(l.$attrs, { class: s.value }), [
      (p(), W(re(`h${l.headerLevel}`), {
        class: C(o.value)
      }, {
        default: D(() => [
          ne(O(l.headerText), 1)
        ]),
        _: 1
      }, 8, ["class"])),
      m("div", {
        class: C(n.value)
      }, O(l.subText), 3),
      k(l.$slots, "default")
    ], 16));
  }
}), Mi = "overflow-hidden w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white";
function Ii() {
  return {
    containerClasses: c(() => U(
      Mi
    ))
  };
}
const fp = /* @__PURE__ */ S({
  __name: "FwbListGroup",
  setup(e) {
    const { containerClasses: t } = Ii();
    return (r, s) => (p(), b("ul", {
      class: C(x(t))
    }, [
      k(r.$slots, "default")
    ], 2));
  }
}), Oi = {
  border: (e) => e.substring(0, e.lastIndexOf("-"))
}, Li = (e, t = Oi) => {
  const s = Object.keys(t).find((o) => e.includes(o));
  return s ? t[s](e) : e.substring(0, e.indexOf("-"));
};
function ve(...e) {
  return e.filter((t) => t).reduce((t, r) => {
    const s = Array.isArray(r) ? Array.from(r).map((u) => u.split(" ")).flat() : r.split(" "), o = s.map((u) => Li(u)), n = o.filter((u) => !t.types.includes(u)), a = [...o.filter((u) => t.types.includes(u)), ...n], i = [.../* @__PURE__ */ new Set([...t.types, ...a])], d = i.map((u) => {
      if (a.includes(u)) {
        const y = o.indexOf(u);
        if (y >= 0)
          return s[y] || "";
      }
      const h = t.types.indexOf(u);
      return h >= 0 && t.classes[h] || "";
    }).filter((u) => !!u);
    return {
      types: i,
      classes: d
    };
  }, { types: [], classes: [] }).classes.join(" ");
}
const Ei = "inline-flex items-center w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600", Ri = "block w-full px-4 py-2 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white", Ni = "bg-gray-100 cursor-not-allowed dark:bg-gray-600 dark:text-gray-400";
function ji(e) {
  return {
    itemClasses: c(() => ve(
      Ei,
      e.disabled.value ? Ni : "",
      !e.disabled.value && e.hover.value ? Ri : ""
    ))
  };
}
const Vi = {
  key: 0,
  class: "mr-2"
}, Di = {
  key: 1,
  class: "ml-2"
}, pp = /* @__PURE__ */ S({
  __name: "FwbListGroupItem",
  props: {
    hover: {
      type: Boolean,
      default: !1
    },
    disabled: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, { itemClasses: r } = ji(J(t));
    return (s, o) => (p(), b("li", {
      class: C(x(r))
    }, [
      s.$slots.prefix ? (p(), b("div", Vi, [
        k(s.$slots, "prefix")
      ])) : z("", !0),
      k(s.$slots, "default"),
      s.$slots.suffix ? (p(), b("div", Di, [
        k(s.$slots, "suffix")
      ])) : z("", !0)
    ], 2));
  }
}), Hi = { class: "relative rounded-lg bg-white shadow dark:bg-gray-700" }, Wi = {
  key: 0,
  class: "rounded-b border-t border-gray-200 p-6 dark:border-gray-600"
}, gp = /* @__PURE__ */ S({
  __name: "FwbModal",
  props: {
    notEscapable: { type: Boolean, default: !1 },
    persistent: { type: Boolean, default: !1 },
    size: { default: "2xl" },
    position: { default: "center" }
  },
  emits: ["close", "click:outside"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = {
      xs: "max-w-xs",
      sm: "max-w-sm",
      md: "max-w-md",
      lg: "max-w-lg",
      xl: "max-w-xl",
      "2xl": "max-w-2xl",
      "3xl": "max-w-3xl",
      "4xl": "max-w-4xl",
      "5xl": "max-w-5xl",
      "6xl": "max-w-6xl",
      "7xl": "max-w-7xl"
    }, n = {
      "top-start": "self-start justify-self-start",
      "top-center": "self-start justify-self-center",
      "top-end": "self-start justify-self-end",
      "center-start": "self-center justify-self-start",
      center: "self-center justify-self-center",
      "center-end": "self-center justify-self-end",
      "bottom-start": "self-end justify-self-start",
      "bottom-center": "self-end justify-self-center",
      "bottom-end": "self-end justify-self-end"
    };
    function l() {
      s("close");
    }
    function a() {
      r.persistent || (s("click:outside"), l());
    }
    function i() {
      !r.notEscapable && !r.persistent && l();
    }
    const d = R(null);
    return je(() => {
      d.value && d.value.focus();
    }), (u, h) => (p(), b("div", null, [
      h[1] || (h[1] = m("div", { class: "fixed inset-0 z-40 bg-gray-900/50 dark:bg-gray-900/80" }, null, -1)),
      m("div", {
        ref_key: "modalRef",
        ref: d,
        class: "fixed inset-x-0 top-0 z-50 grid h-modal w-full overflow-y-auto overflow-x-hidden md:inset-0 md:h-full",
        tabindex: "0",
        onClick: xt(a, ["self"]),
        onKeyup: is(i, ["esc"])
      }, [
        m("div", {
          class: C([`${o[u.size]} ${n[u.position]}`, "relative w-full p-4"])
        }, [
          m("div", Hi, [
            m("div", {
              class: C([u.$slots.header ? "border-b border-gray-200 dark:border-gray-600" : "", "flex items-center justify-between rounded-t p-4"])
            }, [
              k(u.$slots, "header"),
              u.persistent ? z("", !0) : (p(), b("button", {
                key: 0,
                "aria-label": "close",
                class: "ms-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white",
                type: "button",
                onClick: l
              }, [
                k(u.$slots, "close-icon", {}, () => [
                  h[0] || (h[0] = m("svg", {
                    class: "size-5",
                    fill: "currentColor",
                    viewBox: "0 0 20 20",
                    xmlns: "http://www.w3.org/2000/svg"
                  }, [
                    m("path", {
                      "clip-rule": "evenodd",
                      d: "M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z",
                      "fill-rule": "evenodd"
                    })
                  ], -1))
                ])
              ]))
            ], 2),
            m("div", {
              class: C([u.$slots.header ? "" : "pt-0", "p-6"])
            }, [
              k(u.$slots, "body")
            ], 2),
            u.$slots.footer ? (p(), b("div", Wi, [
              k(u.$slots, "footer")
            ])) : z("", !0)
          ])
        ], 2)
      ], 544)
    ]));
  }
}), Gi = { class: "container mx-auto flex flex-wrap items-center justify-between" }, qi = {
  key: 0,
  class: "hidden md:order-2 md:flex"
}, Ui = " border-gray-200", Yi = "fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600", Ki = "rounded", Ji = "p-3 bg-gray-50 dark:bg-gray-800 dark:border-gray-700", Xi = "bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900", hp = /* @__PURE__ */ S({
  __name: "FwbNavbar",
  props: {
    class: {
      type: String,
      default: ""
    },
    sticky: {
      type: Boolean,
      default: !1
    },
    rounded: {
      type: Boolean,
      default: !1
    },
    solid: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, r = Ye(), o = ks(xs).smaller("md"), n = R(!1), l = Ca(n), a = c(() => H(
      [
        Ui,
        t.sticky ? Yi : "",
        t.rounded ? Ki : "",
        t.solid ? Ji : Xi,
        t.class
      ].join(" ")
    )), i = c(
      () => o ? n.value : !0
    );
    return (d, u) => (p(), b("nav", {
      class: C(a.value)
    }, [
      m("div", Gi, [
        k(d.$slots, "logo"),
        m("button", {
          "aria-controls": "navbar-default",
          "aria-expanded": "false",
          class: "ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden",
          type: "button",
          onClick: u[0] || (u[0] = (h) => x(l)())
        }, [
          u[2] || (u[2] = m("span", { class: "sr-only" }, "Open main menu", -1)),
          k(d.$slots, "menu-icon", {}, () => [
            u[1] || (u[1] = m("svg", {
              "aria-hidden": "true",
              class: "size-6",
              fill: "currentColor",
              viewBox: "0 0 20 20",
              xmlns: "http://www.w3.org/2000/svg"
            }, [
              m("path", {
                "clip-rule": "evenodd",
                d: "M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z",
                "fill-rule": "evenodd"
              })
            ], -1))
          ])
        ]),
        k(d.$slots, "default", { isShowMenu: i.value }),
        x(r)["right-side"] ? (p(), b("div", qi, [
          k(d.$slots, "right-side")
        ])) : z("", !0)
      ])
    ], 2));
  }
}), Zi = "w-full md:block md:w-auto", Qi = "flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700", ed = "bg-gray-50", mp = /* @__PURE__ */ S({
  __name: "FwbNavbarCollapse",
  props: {
    isShowMenu: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const r = ks(xs).smaller("md"), s = e, o = c(() => U(
      Zi,
      s.isShowMenu ? "" : "hidden"
    )), n = c(() => U(
      Qi,
      r.value ? ed : ""
    ));
    return (l, a) => (p(), b("div", {
      class: C(o.value)
    }, [
      m("ul", {
        class: C(n.value)
      }, [
        k(l.$slots, "default")
      ], 2)
    ], 2));
  }
}), td = "bg-blue-700 md:bg-transparent text-white md:text-blue-700 dark:text-white", rd = "text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent", sd = "block py-2 pr-4 pl-3 rounded md:p-0", bp = /* @__PURE__ */ S({
  __name: "FwbNavbarLink",
  props: {
    link: { default: "/" },
    isActive: { type: Boolean, default: !1 },
    component: { default: "a" },
    linkAttr: { default: "href" },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["click"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c(() => r.component !== "a" ? ye(r.component) : "a"), n = E(
      sd,
      r.isActive ? td : rd
    ), l = (a) => {
      r.disabled || s("click", a);
    };
    return (a, i) => (p(), b("li", null, [
      (p(), W(re(o.value), Ae({
        [a.linkAttr || ""]: a.link,
        class: x(n),
        onClick: l
      }), {
        default: D(() => [
          k(a.$slots, "default")
        ]),
        _: 3
      }, 16, ["class"]))
    ]));
  }
}), od = ["src", "alt"], nd = { class: "self-center whitespace-nowrap text-xl font-semibold dark:text-white" }, vp = /* @__PURE__ */ S({
  __name: "FwbNavbarLogo",
  props: {
    link: { default: "/" },
    imageUrl: { default: "/assets/logo.svg" },
    alt: { default: "Logo" },
    component: { default: "a" },
    linkAttr: { default: "href" }
  },
  setup(e) {
    const t = e, r = c(() => t.component !== "a" ? ye(t.component) : "a");
    return (s, o) => (p(), W(re(r.value), Ae({
      class: "flex items-center",
      [s.linkAttr || ""]: s.link
    }), {
      default: D(() => [
        m("img", {
          src: s.imageUrl,
          alt: s.alt,
          class: "mr-3 h-6 sm:h-10"
        }, null, 8, od),
        m("span", nd, [
          k(s.$slots, "default")
        ])
      ]),
      _: 3
    }, 16));
  }
}), ad = { "aria-label": "Navigation" }, ld = { class: "font-semibold text-gray-900 dark:text-white" }, id = { class: "font-semibold text-gray-900 dark:text-white" }, dd = { class: "font-semibold text-gray-900 dark:text-white" }, ud = ["disabled"], cd = ["disabled"], fd = {
  key: 0,
  stroke: "currentColor",
  fill: "currentColor",
  "stroke-width": "0",
  viewBox: "0 0 20 20",
  "aria-hidden": "true",
  class: "size-5",
  height: "1em",
  width: "1em",
  xmlns: "http://www.w3.org/2000/svg"
}, pd = ["disabled", "onClick"], gd = ["disabled"], hd = {
  key: 0,
  stroke: "currentColor",
  fill: "currentColor",
  "stroke-width": "0",
  viewBox: "0 0 20 20",
  "aria-hidden": "true",
  class: "size-5",
  height: "1em",
  width: "1em",
  xmlns: "http://www.w3.org/2000/svg"
}, md = ["disabled"], yp = /* @__PURE__ */ S({
  __name: "FwbPagination",
  props: {
    modelValue: { default: 1 },
    totalPages: { default: void 0 },
    perPage: { default: 10 },
    totalItems: { default: 10 },
    layout: { default: "pagination" },
    showIcons: { type: Boolean, default: !1 },
    sliceLength: { default: 2 },
    previousLabel: { default: "Prev" },
    nextLabel: { default: "Next" },
    enableFirstAndLastButtons: { type: Boolean, default: !1 },
    showLabels: { type: Boolean, default: !0 },
    large: { type: Boolean, default: !1 }
  },
  emits: ["update:model-value", "page-changed"],
  setup(e, { emit: t }) {
    const r = t, s = e;
    function o(_) {
      r("update:model-value", _), r("page-changed", _);
    }
    function n() {
      r("update:model-value", s.modelValue - 1), r("page-changed", s.modelValue - 1);
    }
    function l() {
      r("update:model-value", s.modelValue + 1), r("page-changed", s.modelValue + 1);
    }
    function a() {
      r("update:model-value", 1), r("page-changed", 1);
    }
    function i() {
      const _ = d.value;
      r("update:model-value", _), r("page-changed", _);
    }
    const d = c(() => s.totalPages ? s.totalPages : Math.ceil(s.totalItems / s.perPage)), u = c(() => s.modelValue <= 1), h = c(() => s.modelValue >= d.value), y = (_) => _ === s.modelValue, f = c(() => {
      if (s.layout === "navigation") return [];
      if (s.layout === "table") return [];
      if (d.value <= s.sliceLength * 2 + 1) {
        const A = [];
        for (let N = 1; N <= d.value; N++)
          A.push(N);
        return A;
      }
      if (s.modelValue <= s.sliceLength) {
        const A = [], N = Math.abs(s.modelValue - s.sliceLength) + s.modelValue + s.sliceLength + 1;
        for (let G = 1; G <= N; G++)
          A.push(G);
        return A;
      }
      if (s.modelValue >= d.value - s.sliceLength) {
        const A = [];
        for (let N = Math.abs(d.value - s.sliceLength * 2); N <= d.value; N++)
          A.push(N);
        return A;
      }
      const _ = [], I = s.modelValue - s.sliceLength > 0 ? s.modelValue - s.sliceLength : 1;
      for (let A = I; A < s.modelValue + s.sliceLength + 1 && !(A >= d.value); A++)
        _.push(A);
      return _;
    }), g = c(() => s.modelValue * s.perPage - s.perPage + 1), v = c(() => {
      const _ = s.modelValue * s.perPage;
      return s.totalItems && _ > s.totalItems ? s.totalItems : _;
    }), w = c(() => s.totalItems ? s.totalItems : d.value * s.perPage), $ = c(() => s.modelValue === 1), T = c(() => s.modelValue === d.value);
    function P(_) {
      return E("flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white", _ && "text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:bg-gray-700 dark:text-white", s.large && "px-4 h-10");
    }
    function M(_) {
      const I = "flex items-center justify-center first:rounded-l-lg last:rounded-r-lg px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white", A = "disabled:opacity-50 disabled:cursor-not-allowed";
      return E(
        I,
        _ === s.modelValue && A,
        s.large && "px-4 h-10",
        (_ > d.value || _ < 1) && A,
        s.layout === "navigation" && "first:mr-3",
        (s.layout === "navigation" || s.layout === "table") && "rounded-lg",
        s.layout === "table" && "border-none text-white hover:text-white bg-gray-800 rounded-none first:rounded-l last:rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      );
    }
    return (_, I) => (p(), b("nav", ad, [
      _.layout === "table" ? (p(), b("div", {
        key: 0,
        class: C(["mb-2 text-gray-700 dark:text-gray-400", _.large ? "text-base" : "text-sm"])
      }, [
        I[0] || (I[0] = ne(" Showing ")),
        m("span", ld, O(g.value), 1),
        I[1] || (I[1] = ne(" to ")),
        m("span", id, O(v.value), 1),
        I[2] || (I[2] = ne(" of ")),
        m("span", dd, O(w.value), 1)
      ], 2)) : z("", !0),
      m("div", {
        class: C(["inline-flex", _.large && "text-base h-10"])
      }, [
        k(_.$slots, "start"),
        _.enableFirstAndLastButtons ? k(_.$slots, "first-button", { key: 0 }, () => [
          m("button", {
            disabled: $.value,
            class: C(M(1)),
            onClick: a
          }, " First ", 10, ud)
        ]) : z("", !0),
        k(_.$slots, "prev-button", {
          disabled: u.value,
          decreasePage: n
        }, () => [
          m("button", {
            disabled: u.value,
            class: C(M(_.modelValue - 1)),
            onClick: n
          }, [
            k(_.$slots, "prev-icon", {}, () => [
              _.showIcons || _.$slots["prev-icon"] ? (p(), b("svg", fd, I[3] || (I[3] = [
                m("path", {
                  "fill-rule": "evenodd",
                  d: "M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z",
                  "clip-rule": "evenodd"
                }, null, -1)
              ]))) : z("", !0)
            ]),
            _.showLabels ? (p(), b(K, { key: 0 }, [
              ne(O(_.previousLabel), 1)
            ], 64)) : z("", !0)
          ], 10, cd)
        ]),
        (p(!0), b(K, null, Ee(f.value, (A) => k(_.$slots, "page-button", {
          key: A,
          page: A,
          setPage: o,
          disabled: y(A)
        }, () => [
          m("button", {
            disabled: y(A),
            class: C(P(A === _.modelValue)),
            onClick: (N) => o(A)
          }, O(A), 11, pd)
        ])), 128)),
        k(_.$slots, "next-button", {
          disabled: h.value,
          increasePage: l
        }, () => [
          m("button", {
            disabled: h.value,
            class: C(M(_.modelValue + 1)),
            onClick: l
          }, [
            _.showLabels ? (p(), b(K, { key: 0 }, [
              ne(O(_.nextLabel), 1)
            ], 64)) : z("", !0),
            k(_.$slots, "next-icon", {}, () => [
              _.showIcons || _.$slots["next-icon"] ? (p(), b("svg", hd, I[4] || (I[4] = [
                m("path", {
                  "fill-rule": "evenodd",
                  d: "M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z",
                  "clip-rule": "evenodd"
                }, null, -1)
              ]))) : z("", !0)
            ])
          ], 10, gd)
        ]),
        _.enableFirstAndLastButtons ? k(_.$slots, "last-button", { key: 1 }, () => [
          m("button", {
            disabled: T.value,
            class: C(M(d.value)),
            onClick: i
          }, " Last ", 10, md)
        ]) : z("", !0),
        k(_.$slots, "end")
      ], 2)
    ]));
  }
}), bd = {
  default: "bg-blue-600 dark:bg-blue-600",
  blue: "bg-blue-600 dark:bg-blue-600",
  dark: "bg-gray-600 dark:bg-gray-300",
  green: "bg-green-600 dark:bg-green-500",
  red: "bg-red-600 dark:bg-red-500",
  yellow: "bg-yellow-400",
  indigo: "bg-indigo-600 dark:bg-indigo-500",
  purple: "bg-purple-600 dark:bg-purple-500"
}, vd = {
  default: "",
  blue: "text-blue-700 dark:text-blue-500",
  dark: "dark:text-white",
  green: "text-green-700 dark:text-green-500",
  red: "text-red-700 dark:text-red-500",
  yellow: "text-yellow-700 dark:text-yellow-500",
  indigo: "text-indigo-700 dark:text-indigo-500",
  purple: "text-purple-700 dark:text-purple-500"
}, Nr = {
  sm: "h-1.5 text-xs leading-none",
  md: "h-2.5 text-xs leading-none",
  lg: "h-4 text-sm leading-none",
  xl: "h-6 text-base leading-tight"
};
function yd(e) {
  const t = c(() => U(
    bd[e.color.value],
    Nr[e.size.value]
  )), r = c(() => U(
    Nr[e.size.value]
  )), s = c(() => U(
    vd[e.color.value]
  ));
  return {
    innerClasses: t,
    outerClasses: r,
    outsideLabelClasses: s
  };
}
const wd = {
  key: 0,
  class: "mb-1 flex justify-between"
}, wp = /* @__PURE__ */ S({
  __name: "FwbProgress",
  props: {
    color: { default: "default" },
    label: { default: "" },
    labelPosition: { default: "none" },
    labelProgress: { type: Boolean, default: !1 },
    progress: { default: 0 },
    size: { default: "md" }
  },
  setup(e) {
    const t = e, {
      innerClasses: r,
      outerClasses: s,
      outsideLabelClasses: o
    } = yd(J(t));
    return (n, l) => (p(), b("div", null, [
      n.label || n.labelProgress && n.labelPosition === "outside" ? (p(), b("div", wd, [
        m("span", {
          class: C([x(o), "text-base font-medium"])
        }, O(n.label), 3),
        n.labelProgress && n.labelPosition === "outside" ? (p(), b("span", {
          key: 0,
          class: C([x(o), "text-sm font-medium"])
        }, O(n.progress) + "%", 3)) : z("", !0)
      ])) : z("", !0),
      m("div", {
        class: C([x(s), "w-full rounded-full bg-gray-200 dark:bg-gray-700"])
      }, [
        m("div", {
          class: C([x(r), "rounded-full p-0.5 text-center font-medium text-blue-100"]),
          style: st({ width: n.progress + "%" })
        }, [
          n.labelProgress && n.labelPosition === "inside" ? (p(), b(K, { key: 0 }, [
            ne(O(n.progress) + "% ", 1)
          ], 64)) : z("", !0)
        ], 6)
      ], 2)
    ]));
  }
}), xd = {
  sm: "w-5 h-5",
  md: "w-7 h-7",
  lg: "w-10 h-10"
};
function kd(e) {
  return { sizeClasses: c(() => U(
    xd[e.size.value] ?? ""
  )) };
}
const Cd = { class: "flex items-center" }, _d = ["href"], xp = /* @__PURE__ */ S({
  __name: "FwbRating",
  props: {
    rating: { default: 3 },
    reviewLink: { default: "" },
    reviewText: { default: "" },
    scale: { default: 5 },
    size: { default: "md" }
  },
  setup(e) {
    const t = e, r = c(() => Math.floor(t.rating)), s = c(() => t.scale - r.value), { sizeClasses: o } = kd(J(t));
    return (n, l) => (p(), b("div", Cd, [
      (p(!0), b(K, null, Ee(r.value, (a) => (p(), b("svg", {
        key: a,
        class: C([x(o), "text-yellow-400"]),
        fill: "currentColor",
        viewBox: "0 0 20 20",
        xmlns: "http://www.w3.org/2000/svg"
      }, l[0] || (l[0] = [
        m("path", { d: "M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" }, null, -1)
      ]), 2))), 128)),
      (p(!0), b(K, null, Ee(s.value, (a) => (p(), b("svg", {
        key: a,
        class: C([x(o), "text-gray-300 dark:text-gray-500"]),
        fill: "currentColor",
        viewBox: "0 0 20 20",
        xmlns: "http://www.w3.org/2000/svg"
      }, l[1] || (l[1] = [
        m("path", { d: "M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" }, null, -1)
      ]), 2))), 128)),
      k(n.$slots, "besideText"),
      n.reviewText && n.reviewLink ? (p(), b(K, { key: 0 }, [
        l[2] || (l[2] = m("span", { class: "mx-1.5 size-1 rounded-full bg-gray-500 dark:bg-gray-400" }, null, -1)),
        m("a", {
          href: n.reviewLink,
          class: "text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white"
        }, O(n.reviewText), 9, _d)
      ], 64)) : z("", !0)
    ]));
  }
}), $d = { class: "h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-gray-800" }, Sd = { class: "space-y-2 font-medium" }, kp = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbSidebar",
  setup(e) {
    const t = ie(), r = E("absolute top-0 left-0 z-40 w-64 h-screen transition-transform", t.class);
    return (s, o) => (p(), b("aside", te(s.$attrs, {
      class: x(r),
      "aria-label": "Sidebar"
    }), [
      m("div", $d, [
        m("div", Sd, [
          k(s.$slots, "default")
        ])
      ])
    ], 16));
  }
}), Td = {
  class: "mt-6 rounded-lg bg-blue-50 p-4 dark:bg-blue-900",
  role: "alert"
}, zd = { class: "mb-3 flex items-center" }, Pd = { class: "mr-2 rounded bg-orange-100 px-2.5 py-0.5 text-sm font-semibold text-orange-800 dark:bg-orange-200 dark:text-orange-900" }, Cp = /* @__PURE__ */ S({
  __name: "FwbSidebarCta",
  props: {
    label: { default: void 0 }
  },
  emits: ["close"],
  setup(e, { emit: t }) {
    const r = t;
    function s() {
      r("close");
    }
    return (o, n) => (p(), b("div", Td, [
      m("div", zd, [
        m("span", Pd, O(o.label), 1),
        m("button", {
          type: "button",
          class: "-m-1.5 ml-auto inline-flex size-6 items-center justify-center rounded-lg bg-blue-50 p-1 text-blue-900 hover:bg-blue-200 focus:ring-2 focus:ring-blue-400 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800",
          "aria-label": "Close",
          onClick: s
        }, n[0] || (n[0] = [
          m("span", { class: "sr-only" }, "Close", -1),
          m("svg", {
            class: "size-2.5",
            "aria-hidden": "true",
            xmlns: "http://www.w3.org/2000/svg",
            fill: "none",
            viewBox: "0 0 14 14"
          }, [
            m("path", {
              stroke: "currentColor",
              "stroke-linecap": "round",
              "stroke-linejoin": "round",
              "stroke-width": "2",
              d: "m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
            })
          ], -1)
        ]))
      ]),
      k(o.$slots, "default")
    ]));
  }
}), Ad = { class: "overflow-hidden" }, Fd = { class: "ml-3 flex-1 whitespace-nowrap text-left" }, Bd = { class: "z-0 space-y-2 overflow-hidden py-2" }, Md = { key: 0 }, _p = /* @__PURE__ */ S({
  __name: "FwbSidebarDropdownItem",
  setup(e) {
    const t = R(!1);
    function r() {
      t.value = !t.value;
    }
    return (s, o) => (p(), b("div", Ad, [
      m("button", {
        type: "button",
        class: "group z-10 flex w-full items-center rounded-lg p-2 text-base text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700",
        "aria-controls": "dropdown-content",
        onClick: r
      }, [
        k(s.$slots, "icon", {}, () => [
          o[0] || (o[0] = m("svg", {
            class: "size-5 shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white",
            "aria-hidden": "true",
            xmlns: "http://www.w3.org/2000/svg",
            fill: "currentColor",
            viewBox: "0 0 18 21"
          }, [
            m("path", { d: "M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" })
          ], -1))
        ]),
        m("span", Fd, [
          k(s.$slots, "trigger")
        ]),
        k(s.$slots, "arrow-icon", { toggleDropdown: r }, () => [
          (p(), b("svg", {
            class: C(["size-3 transition-all duration-300", t.value && "rotate-180"]),
            "aria-hidden": "true",
            xmlns: "http://www.w3.org/2000/svg",
            fill: "none",
            viewBox: "0 0 10 6"
          }, o[1] || (o[1] = [
            m("path", {
              stroke: "currentColor",
              "stroke-linecap": "round",
              "stroke-linejoin": "round",
              "stroke-width": "2",
              d: "m1 1 4 4 4-4"
            }, null, -1)
          ]), 2))
        ])
      ]),
      m("div", Bd, [
        Ie(ls, {
          duration: 150,
          "enter-from-class": "-translate-y-full",
          "enter-to-class": "translate-y-0",
          "enter-active-class": "transition duration-400 ease-out",
          "leave-active-class": "transition duration-400 ease-in",
          "leave-from-class": "translate-y-0",
          "leave-to-class": "-translate-y-full"
        }, {
          default: D(() => [
            t.value ? (p(), b("div", Md, [
              k(s.$slots, "default")
            ])) : z("", !0)
          ]),
          _: 3
        })
      ])
    ]));
  }
}), $p = /* @__PURE__ */ S({
  __name: "FwbSidebarItem",
  props: {
    link: { default: "/" },
    tag: { default: "router-link" }
  },
  setup(e) {
    const t = e, r = t.tag === "a" ? "a" : ye(t.tag), s = t.tag === "a" ? "href" : "to";
    return (o, n) => (p(), W(re(x(r)), Ae({
      [x(s) || ""]: o.link,
      class: "group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
    }), {
      default: D(() => [
        k(o.$slots, "icon"),
        m("span", {
          class: C(["flex-1 whitespace-nowrap", o.$slots.icon && "ml-3"])
        }, [
          k(o.$slots, "default")
        ], 2),
        k(o.$slots, "suffix")
      ]),
      _: 3
    }, 16));
  }
}), Id = "pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700", Sp = /* @__PURE__ */ S({
  __name: "FwbSidebarItemGroup",
  props: {
    border: { type: Boolean, default: !1 }
  },
  setup(e) {
    return (t, r) => (p(), b("div", {
      class: C(t.border && Id)
    }, [
      k(t.$slots, "default")
    ], 2));
  }
}), Od = ["src", "alt"], Ld = { class: "self-center whitespace-nowrap text-xl font-semibold dark:text-white" }, Tp = /* @__PURE__ */ S({
  __name: "FwbSidebarLogo",
  props: {
    name: { default: "" },
    link: { default: "/" },
    logo: { default: "" },
    alt: { default: "" },
    tag: { default: "router-link" }
  },
  setup(e) {
    const t = e, r = t.tag === "a" ? "a" : ye(t.tag), s = t.tag === "a" ? "href" : "to";
    return (o, n) => (p(), W(re(x(r)), Ae({
      [x(s) || ""]: o.link,
      class: "mb-5 flex items-center pl-2.5"
    }), {
      default: D(() => [
        m("img", {
          src: o.logo,
          class: "mr-3 h-6 sm:h-7",
          alt: o.alt ?? o.name
        }, null, 8, Od),
        m("span", Ld, O(o.name), 1)
      ]),
      _: 1
    }, 16));
  }
}), Ed = { class: "relative overflow-x-auto shadow-md sm:rounded-lg" }, Rd = { class: "w-full text-left text-sm text-gray-500 dark:text-gray-400" }, zp = /* @__PURE__ */ S({
  __name: "FwbTable",
  props: {
    striped: {
      type: Boolean,
      default: !1
    },
    stripedColumns: {
      type: Boolean,
      default: !1
    },
    hoverable: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e;
    return ce("hoverable", t.hoverable), ce("striped", t.striped), ce("stripedColumns", t.stripedColumns), (r, s) => (p(), b("div", Ed, [
      m("table", Rd, [
        k(r.$slots, "default")
      ])
    ]));
  }
}), Nd = {};
function jd(e, t) {
  return p(), b("tbody", null, [
    k(e.$slots, "default")
  ]);
}
const Pp = /* @__PURE__ */ we(Nd, [["render", jd]]), Vd = "px-6 py-4 first:font-medium first:text-gray-900 first:dark:text-white first:whitespace-nowrap last:text-right", Dd = "even:bg-gray-white even:dark:bg-gray-900 odd:dark:bg-gray-800 odd:bg-gray-50";
function Hd() {
  const e = ee("stripedColumns");
  return { tableCellClasses: c(() => U(
    Vd,
    { [Dd]: e }
  )) };
}
const Ap = /* @__PURE__ */ S({
  __name: "FwbTableCell",
  setup(e) {
    const { tableCellClasses: t } = Hd();
    return (r, s) => (p(), b("td", {
      class: C(x(t))
    }, [
      k(r.$slots, "default")
    ], 2));
  }
}), Wd = {}, Gd = { class: "bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400" };
function qd(e, t) {
  return p(), b("thead", Gd, [
    m("tr", null, [
      k(e.$slots, "default")
    ])
  ]);
}
const Fp = /* @__PURE__ */ we(Wd, [["render", qd]]), Ud = "px-6 py-3 text-xs uppercase", Yd = "even:bg-white even:dark:bg-gray-900 odd:dark:bg-gray-800 odd:bg-gray-50";
function Kd() {
  const e = ee("stripedColumns");
  return { tableHeadCellClasses: c(() => U(
    Ud,
    { [Yd]: e }
  )) };
}
const Bp = /* @__PURE__ */ S({
  __name: "FwbTableHeadCell",
  setup(e) {
    const { tableHeadCellClasses: t } = Kd();
    return (r, s) => (p(), b("th", {
      scope: "col",
      class: C(x(t))
    }, [
      k(r.$slots, "default")
    ], 2));
  }
}), Jd = "bg-white dark:bg-gray-800 [&:not(:last-child)]:border-b [&:not(:last-child)]:dark:border-gray-700", Xd = "odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700", Zd = "hover:bg-gray-50 dark:hover:bg-gray-600";
function Qd() {
  const e = ee("striped"), t = ee("hoverable");
  return { tableRowClasses: c(() => U(
    Jd,
    {
      [Zd]: t,
      [Xd]: e
    }
  )) };
}
const Mp = /* @__PURE__ */ S({
  __name: "FwbTableRow",
  setup(e) {
    const { tableRowClasses: t } = Qd();
    return (r, s) => (p(), b("tr", {
      class: C(x(t))
    }, [
      k(r.$slots, "default")
    ], 2));
  }
}), As = "flowbite-tab-activate-func-injection", Fs = "flowbite-tab-active-name-injection", Bs = "flowbite-tab-style-injection", Ms = "flowbite-tab-visibility-directive-injection", eu = { key: 0 }, tu = { key: 1 }, Ip = /* @__PURE__ */ S({
  __FLOWBITE_TAB__: !0,
  __name: "FwbTab",
  props: {
    name: {
      type: String,
      required: !0
    },
    title: {
      type: String,
      default: ""
    },
    disabled: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = ee(Fs, ""), r = ee(Ms, "if");
    return (s, o) => x(r) === "if" ? (p(), b(K, { key: 0 }, [
      x(t) === e.name ? (p(), b("div", eu, [
        k(s.$slots, "default")
      ])) : z("", !0)
    ], 64)) : x(r) === "show" ? Fe((p(), b("div", tu, [
      k(s.$slots, "default")
    ], 512)), [
      [io, x(t) === e.name]
    ]) : z("", !0);
  }
});
function ru(e) {
  const t = c(() => E(
    "flex flex-wrap font-medium text-center text-gray-500 dark:text-gray-400 text-sm",
    e.variant === "underline" && "-mb-px",
    e.variant === "default" && "border-b border-gray-200 dark:border-gray-700"
  ));
  return {
    divClasses: c(() => e.variant === "underline" ? "border-b border-gray-200 dark:border-gray-700 font-medium text-center text-gray-500 dark:text-gray-400 text-sm" : ""),
    ulClasses: t
  };
}
const Is = "flowbite-themable-injection-key", He = {
  blue: {
    background: "bg-blue-700 dark:bg-blue-600",
    disabled: "",
    hover: "hover:bg-blue-800 dark:hover:bg-blue-700",
    text: "text-blue-600 dark:text-blue-500",
    border: "border-blue-600 dark:border-blue-500",
    focus: "focus:ring-blue-300 dark:focus:ring-blue-800"
  },
  green: {
    background: "bg-green-700 dark:bg-green-600",
    disabled: "",
    hover: "hover:bg-green-800 dark:hover:bg-green-700",
    text: "text-green-600 dark:text-green-500",
    border: "border-green-600 dark:border-green-500",
    focus: "focus:ring-green-300 dark:focus:ring-green-800"
  },
  pink: {
    background: "bg-pink-700 dark:bg-pink-600",
    disabled: "",
    hover: "hover:bg-pink-800 dark:hover:bg-pink-700",
    text: "text-pink-600 dark:text-pink-500",
    border: "border-pink-600 dark:border-pink-500",
    focus: "focus:ring-pink-300 dark:focus:ring-pink-900"
  },
  purple: {
    background: "bg-purple-700 dark:bg-purple-600",
    disabled: "",
    hover: "hover:bg-purple-800 dark:hover:bg-purple-700",
    text: "text-purple-600 dark:text-purple-500",
    border: "border-purple-600 dark:border-purple-500",
    focus: "focus:ring-purple-300 dark:focus:ring-purple-900"
  },
  red: {
    background: "bg-red-700 dark:bg-red-600",
    disabled: "",
    hover: "hover:bg-red-800 dark:hover:bg-red-700",
    text: "text-red-600 dark:text-red-500",
    border: "border-red-600 dark:border-red-500",
    focus: "focus:ring-red-300 dark:focus:ring-red-900"
  }
};
function Os(e) {
  const t = ee(Is, R(null)), r = c(() => e || t.value), s = c(() => !!t?.value), o = c(
    () => r.value ? He[r.value].background : ""
  ), n = c(
    () => r.value ? He[r.value].border : ""
  ), l = c(() => t?.value || void 0), a = c(
    () => r.value ? He[r.value].disabled : ""
  ), i = c(
    () => r.value ? He[r.value].focus : ""
  ), d = c(
    () => r.value ? He[r.value].hover : ""
  ), u = c(
    () => r.value ? He[r.value].text : ""
  );
  return {
    backgroundClasses: o,
    borderClasses: n,
    color: l,
    disabledClasses: a,
    focusClasses: i,
    hoverClasses: d,
    isActive: s,
    textClasses: u
  };
}
const su = {
  default: "cursor-pointer inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300",
  active: "cursor-pointer inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500",
  disabled: "inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500"
}, ou = {
  default: "cursor-pointer inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300",
  active: "cursor-pointer inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500",
  disabled: "inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500"
}, nu = {
  default: "cursor-pointer inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white",
  active: "cursor-pointer inline-block py-3 px-4 text-white bg-blue-600 rounded-lg active",
  disabled: "inline-block py-3 px-4 text-gray-400 cursor-not-allowed dark:text-gray-500"
};
function au(e) {
  const t = Os();
  return { tabClasses: c(() => {
    const s = t.isActive.value, o = e.active.value ? "active" : e.disabled.value ? "disabled" : "default";
    return e.variant === "default" ? ve(
      su[o],
      (s && o) === "active" ? t.textClasses.value : ""
    ) : e.variant === "underline" ? ve(
      ou[o],
      (s && o) === "active" ? [t.borderClasses.value, t.textClasses.value] : ""
    ) : e.variant === "pills" ? ve(
      nu[o],
      (s && o) === "active" ? [t.backgroundClasses.value, "text-white"] : ""
    ) : "";
  }) };
}
const lu = /* @__PURE__ */ S({
  __name: "FwbTabPane",
  props: {
    name: {
      type: String,
      required: !0
    },
    title: {
      type: String,
      default: ""
    },
    disabled: {
      type: Boolean,
      default: !1
    },
    active: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e, r = ee(Bs);
    r || console.warn("you can't use Tab outside of Tabs component. No tab style injection found");
    const s = ee(As);
    s || console.warn("you can't use Tab outside of Tabs component. No tab activate injection found");
    const o = () => {
      if (!t.disabled) {
        if (!s) return console.warn("no onActivate");
        s(t.name);
      }
    }, { tabClasses: n } = au({
      active: Ct(t, "active"),
      disabled: Ct(t, "disabled"),
      variant: r
    });
    return (l, a) => (p(), b("li", null, [
      m("div", {
        class: C(x(n)),
        onClick: o
      }, O(e.title), 3)
    ]));
  }
}), Op = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbTabs",
  props: {
    variant: { default: "default" },
    modelValue: { default: "" },
    directive: { default: "if" }
  },
  emits: ["update:modelValue", "click:pane"],
  setup(e, { emit: t }) {
    const r = e, s = t, { ulClasses: o, divClasses: n } = ru(r);
    ce(Bs, r.variant);
    const a = Ye().default, i = c(() => a ? St(a({})).filter((y) => y.type.__FLOWBITE_TAB__) : []), d = c({
      get: () => r.modelValue,
      set: (y) => s("update:modelValue", y)
    });
    ce(Fs, d), ce(Ms, Ct(r, "directive"));
    const u = (y) => {
      d.value = y;
    }, h = () => {
      s("click:pane");
    };
    return ce(As, u), (y, f) => (p(), b(K, null, [
      m("div", {
        class: C(x(n))
      }, [
        m("ul", {
          class: C(x(o))
        }, [
          (p(!0), b(K, null, Ee(i.value, (g, v) => (p(), W(lu, {
            key: v,
            active: d.value === g.props?.name,
            disabled: g.props?.disabled,
            name: g.props?.name,
            title: g.props?.title,
            onClick: h
          }, null, 8, ["active", "disabled", "name", "title"]))), 128))
        ], 2)
      ], 2),
      m("div", Ae(ds(y.$attrs)), [
        k(y.$slots, "default")
      ], 16)
    ], 64));
  }
}), iu = "relative border-gray-200 dark:border-gray-700", du = "border-l", uu = "flex", Lp = /* @__PURE__ */ S({
  __name: "FwbTimeline",
  props: {
    horizontal: {
      type: Boolean,
      default: !1
    }
  },
  setup(e) {
    const t = e;
    ce("horizontal", t.horizontal);
    const r = c(() => U(
      iu,
      t.horizontal ? uu : du
    ));
    return (s, o) => (p(), b("ol", te({ class: r.value }, s.$attrs), [
      k(s.$slots, "default")
    ], 16));
  }
}), cu = {}, fu = { class: "mb-4 text-base font-normal text-gray-500 dark:text-gray-400" };
function pu(e, t) {
  return p(), b("p", fu, [
    k(e.$slots, "default")
  ]);
}
const Ep = /* @__PURE__ */ we(cu, [["render", pu]]), Rp = /* @__PURE__ */ S({
  __name: "FwbTimelineContent",
  setup(e) {
    const t = ee("horizontal"), r = c(() => U(t ? "mt-3 sm:pr-8" : ""));
    return (s, o) => (p(), b("div", {
      class: C(r.value)
    }, [
      k(s.$slots, "default")
    ], 2));
  }
}), gu = "mb-10", hu = "mb-6 sm:mb-0 relative", mu = "ml-6", Np = /* @__PURE__ */ S({
  __name: "FwbTimelineItem",
  setup(e) {
    const t = ee("horizontal"), r = c(() => U(gu, t ? hu : mu));
    return (s, o) => (p(), b("li", {
      class: C(r.value)
    }, [
      k(s.$slots, "default")
    ], 2));
  }
}), bu = "h-0.5 w-full bg-gray-200 dark:bg-gray-700 sm:flex", jp = /* @__PURE__ */ S({
  __name: "FwbTimelinePoint",
  setup(e) {
    const t = Ye(), r = c(() => !!t.default), s = ee("horizontal"), o = c(() => U(s ? "flex items-center" : "")), n = c(() => U(bu, { "sm:hidden hidden": !s })), l = c(() => {
      const a = "absolute rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700", i = "mt-1.5 w-3 h-3 bg-gray-200", d = "mt-1.5 w-6 h-6 -left-3 flex justify-center items-center bg-blue-200 ring-8 ring-white dark:ring-gray-900", u = "w-3 h-3 bg-gray-200", h = "w-6 h-6 -left-3 flex justify-center items-center bg-blue-200 ring-8 ring-white dark:ring-gray-900", y = !s && !r.value, f = !s && r.value, g = s && !r.value, v = s && r.value;
      return U(
        a,
        {
          [i]: y,
          [d]: f,
          [u]: g,
          [h]: v
        }
      );
    });
    return (a, i) => (p(), b("div", {
      class: C(o.value)
    }, [
      m("div", {
        class: C(l.value)
      }, [
        k(a.$slots, "default")
      ], 2),
      m("div", {
        class: C(n.value)
      }, null, 2)
    ], 2));
  }
}), vu = {}, yu = { class: "mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500" };
function wu(e, t) {
  return p(), b("time", yu, [
    k(e.$slots, "default")
  ]);
}
const Vp = /* @__PURE__ */ we(vu, [["render", wu]]), xu = {}, ku = { class: "text-lg font-semibold text-gray-900 dark:text-white" };
function Cu(e, t) {
  return p(), b("h3", ku, [
    k(e.$slots, "default")
  ]);
}
const Dp = /* @__PURE__ */ we(xu, [["render", Cu]]), _u = {
  danger: "text-red-500 bg-red-100 dark:bg-red-800 dark:text-red-200",
  empty: "",
  success: "text-green-500 bg-green-100 dark:bg-green-800 dark:text-green-200",
  warning: "text-orange-500 bg-orange-100 dark:bg-orange-700 dark:text-orange-200"
}, $u = {
  center: "items-center",
  end: "items-end",
  start: "items-start"
}, jr = "flex w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800", Vr = "text-sm font-normal";
function Su(e) {
  const t = c(() => _u[e.type.value]), r = c(() => {
    const o = $u[e.alignment.value];
    return e.divide.value ? H([jr, "dark:divide-gray-700 divide-x divide-gray-200", o]) : H([jr, o]);
  }), s = c(() => e.type.value !== "empty" && e.divide.value ? H([Vr, "pl-3"]) : Vr);
  return {
    typeClasses: t,
    wrapperClasses: r,
    contentClasses: s
  };
}
function Tu(e) {
  const {
    backgroundClasses: t,
    borderClasses: r,
    disabledClasses: s,
    focusClasses: o,
    hoverClasses: n,
    isActive: l,
    textClasses: a
  } = Os(e.theme?.value);
  return {
    classes: c(() => {
      if (!l.value)
        return "";
      const d = [];
      return e.apply.value.includes("text") && d.push(a.value), e.apply.value.includes("border") && d.push(r.value), e.apply.value.includes("background") && d.push(t.value), e.apply.value.includes("hover") && d.push(n.value), e.apply.value.includes("disabled") && d.push(s.value), e.apply.value.includes("focus") && d.push(o.value), d.join(" ");
    })
  };
}
const zu = /* @__PURE__ */ S({
  __name: "FlowbiteThemableChild",
  props: {
    apply: {
      type: Array,
      required: !0
    },
    tag: {
      type: String,
      default: "div"
    },
    theme: {
      type: String,
      default: void 0
    }
  },
  setup(e) {
    const t = ie(), r = e, { classes: s } = Tu(J(r)), o = c(() => t.class || "");
    return (n, l) => (p(), W(re(e.tag), {
      class: C(x(ve)(o.value, x(s)))
    }, {
      default: D(() => [
        k(n.$slots, "default")
      ]),
      _: 3
    }, 8, ["class"]));
  }
}), Pu = {
  key: 1,
  "aria-hidden": "true",
  class: "size-5",
  fill: "currentColor",
  viewBox: "0 0 20 20",
  xmlns: "http://www.w3.org/2000/svg"
}, Au = {
  key: 2,
  "aria-hidden": "true",
  class: "size-5",
  fill: "currentColor",
  viewBox: "0 0 20 20",
  xmlns: "http://www.w3.org/2000/svg"
}, Fu = {
  key: 3,
  "aria-hidden": "true",
  class: "size-5",
  fill: "currentColor",
  viewBox: "0 0 20 20",
  xmlns: "http://www.w3.org/2000/svg"
}, Dr = /* @__PURE__ */ S({
  __name: "FwbToast",
  props: {
    type: {
      type: String,
      default: "empty"
    },
    alignment: {
      type: String,
      default: "center"
    },
    closable: {
      type: Boolean,
      default: !1
    },
    divide: {
      type: Boolean,
      default: !1
    }
  },
  emits: ["close"],
  setup(e, { emit: t }) {
    const r = e, s = R(!0), o = t, {
      typeClasses: n,
      wrapperClasses: l,
      contentClasses: a
    } = Su(J(r)), i = () => {
      o("close"), s.value = !1;
    };
    return (d, u) => s.value ? (p(), b("div", {
      key: 0,
      id: "toast-default",
      class: C(x(l)),
      role: "alert"
    }, [
      e.type !== "empty" || d.$slots.icon ? (p(), W(zu, {
        key: 0,
        apply: ["background", "text"],
        class: C(["inline-flex size-8 shrink-0 items-center justify-center rounded-lg", x(n)])
      }, {
        default: D(() => [
          d.$slots.icon ? k(d.$slots, "icon", {
            key: 0,
            class: C({ "ml-3": e.type !== "empty" })
          }) : e.type === "success" ? (p(), b("svg", Pu, u[0] || (u[0] = [
            m("path", {
              "clip-rule": "evenodd",
              d: "M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z",
              "fill-rule": "evenodd"
            }, null, -1)
          ]))) : e.type === "danger" ? (p(), b("svg", Au, u[1] || (u[1] = [
            m("path", {
              "clip-rule": "evenodd",
              d: "M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z",
              "fill-rule": "evenodd"
            }, null, -1)
          ]))) : e.type === "warning" ? (p(), b("svg", Fu, u[2] || (u[2] = [
            m("path", {
              "clip-rule": "evenodd",
              d: "M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z",
              "fill-rule": "evenodd"
            }, null, -1)
          ]))) : z("", !0)
        ]),
        _: 3
      }, 8, ["class"])) : z("", !0),
      m("div", {
        class: C([x(a), { "ml-3": d.$slots.icon || e.type !== "empty" }])
      }, [
        k(d.$slots, "default")
      ], 2),
      e.closable ? (p(), b("button", {
        key: 1,
        "aria-label": "Close",
        class: "-m-1.5 ml-auto inline-flex size-8 rounded-lg border-none bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white",
        type: "button",
        onClick: i
      }, u[3] || (u[3] = [
        m("span", { class: "sr-only" }, "Close", -1),
        m("svg", {
          class: "size-5",
          fill: "currentColor",
          viewBox: "0 0 20 20",
          xmlns: "http://www.w3.org/2000/svg"
        }, [
          m("path", {
            "clip-rule": "evenodd",
            d: "M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z",
            "fill-rule": "evenodd"
          })
        ], -1)
      ]))) : z("", !0)
    ], 2)) : z("", !0);
  }
}), Ls = "flowbite-toast-injection-key", Bu = S({
  components: {
    FwbToast: Dr
  },
  props: {
    transition: {
      type: String,
      default: "slide-left"
    }
  },
  setup() {
    const e = R([]), t = (n, l) => {
      ka(() => o(n), l);
    }, r = (n) => {
      const l = parseInt(((/* @__PURE__ */ new Date()).getTime() * Math.random()).toString()).toString();
      return e.value.push({
        id: l,
        ...n
      }), n.time > 0 && t(l, n.time), l;
    }, s = () => {
      if (e.value.length === 0)
        return "";
      const n = e.value[e.value.length - 1].id;
      return e.value.pop(), n;
    }, o = (n) => {
      const l = e.value.findIndex((a) => a.id === n);
      return l >= 0 && e.value.splice(l, 1), l >= 0;
    };
    return ce(Ls, {
      add: r,
      pop: s,
      remove: o
    }), {
      toasts: e,
      removeToast: o
    };
  },
  render() {
    const { $props: e, $slots: t, toasts: r, removeToast: s } = this;
    return ht("div", {}, [
      t.default ? t.default() : null,
      // rendering default slot
      ht(
        uo,
        {
          name: e.transition,
          tag: "div",
          class: "xl:w-1/6 md:w-1/4 sm:w-1/4 fixed top-3 right-3 flex flex-col gap-2 z-50"
        },
        {
          default: () => r.map(
            (o) => o.component ? ht(
              o.component,
              {
                key: o.id,
                onClose: () => s(o.id),
                ...o.componentProps ? o.componentProps : {}
              },
              () => o.text
            ) : ht(
              Dr,
              {
                closable: !0,
                type: o.type,
                key: o.id,
                onClose: () => s(o.id)
              },
              () => o.text
            )
          )
        }
      )
    ]);
  }
}), Hp = /* @__PURE__ */ we(Bu, [["__scopeId", "data-v-f00c0361"]]), Mu = ["top", "right", "bottom", "left"], Hr = ["start", "end"], Wr = /* @__PURE__ */ Mu.reduce((e, t) => e.concat(t, t + "-" + Hr[0], t + "-" + Hr[1]), []), ut = Math.min, Me = Math.max, Iu = {
  left: "right",
  right: "left",
  bottom: "top",
  top: "bottom"
}, Ou = {
  start: "end",
  end: "start"
};
function Zt(e, t, r) {
  return Me(e, ut(t, r));
}
function De(e, t) {
  return typeof e == "function" ? e(t) : e;
}
function ge(e) {
  return e.split("-")[0];
}
function ue(e) {
  return e.split("-")[1];
}
function Es(e) {
  return e === "x" ? "y" : "x";
}
function gr(e) {
  return e === "y" ? "height" : "width";
}
function Ne(e) {
  return ["top", "bottom"].includes(ge(e)) ? "y" : "x";
}
function hr(e) {
  return Es(Ne(e));
}
function Rs(e, t, r) {
  r === void 0 && (r = !1);
  const s = ue(e), o = hr(e), n = gr(o);
  let l = o === "x" ? s === (r ? "end" : "start") ? "right" : "left" : s === "start" ? "bottom" : "top";
  return t.reference[n] > t.floating[n] && (l = zt(l)), [l, zt(l)];
}
function Lu(e) {
  const t = zt(e);
  return [Tt(e), t, Tt(t)];
}
function Tt(e) {
  return e.replace(/start|end/g, (t) => Ou[t]);
}
function Eu(e, t, r) {
  const s = ["left", "right"], o = ["right", "left"], n = ["top", "bottom"], l = ["bottom", "top"];
  switch (e) {
    case "top":
    case "bottom":
      return r ? t ? o : s : t ? s : o;
    case "left":
    case "right":
      return t ? n : l;
    default:
      return [];
  }
}
function Ru(e, t, r, s) {
  const o = ue(e);
  let n = Eu(ge(e), r === "start", s);
  return o && (n = n.map((l) => l + "-" + o), t && (n = n.concat(n.map(Tt)))), n;
}
function zt(e) {
  return e.replace(/left|right|bottom|top/g, (t) => Iu[t]);
}
function Nu(e) {
  return {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0,
    ...e
  };
}
function Ns(e) {
  return typeof e != "number" ? Nu(e) : {
    top: e,
    right: e,
    bottom: e,
    left: e
  };
}
function nt(e) {
  const {
    x: t,
    y: r,
    width: s,
    height: o
  } = e;
  return {
    width: s,
    height: o,
    top: r,
    left: t,
    right: t + s,
    bottom: r + o,
    x: t,
    y: r
  };
}
function Gr(e, t, r) {
  let {
    reference: s,
    floating: o
  } = e;
  const n = Ne(t), l = hr(t), a = gr(l), i = ge(t), d = n === "y", u = s.x + s.width / 2 - o.width / 2, h = s.y + s.height / 2 - o.height / 2, y = s[a] / 2 - o[a] / 2;
  let f;
  switch (i) {
    case "top":
      f = {
        x: u,
        y: s.y - o.height
      };
      break;
    case "bottom":
      f = {
        x: u,
        y: s.y + s.height
      };
      break;
    case "right":
      f = {
        x: s.x + s.width,
        y: h
      };
      break;
    case "left":
      f = {
        x: s.x - o.width,
        y: h
      };
      break;
    default:
      f = {
        x: s.x,
        y: s.y
      };
  }
  switch (ue(t)) {
    case "start":
      f[l] -= y * (r && d ? -1 : 1);
      break;
    case "end":
      f[l] += y * (r && d ? -1 : 1);
      break;
  }
  return f;
}
const ju = async (e, t, r) => {
  const {
    placement: s = "bottom",
    strategy: o = "absolute",
    middleware: n = [],
    platform: l
  } = r, a = n.filter(Boolean), i = await (l.isRTL == null ? void 0 : l.isRTL(t));
  let d = await l.getElementRects({
    reference: e,
    floating: t,
    strategy: o
  }), {
    x: u,
    y: h
  } = Gr(d, s, i), y = s, f = {}, g = 0;
  for (let v = 0; v < a.length; v++) {
    const {
      name: w,
      fn: $
    } = a[v], {
      x: T,
      y: P,
      data: M,
      reset: _
    } = await $({
      x: u,
      y: h,
      initialPlacement: s,
      placement: y,
      strategy: o,
      middlewareData: f,
      rects: d,
      platform: l,
      elements: {
        reference: e,
        floating: t
      }
    });
    u = T ?? u, h = P ?? h, f = {
      ...f,
      [w]: {
        ...f[w],
        ...M
      }
    }, _ && g <= 50 && (g++, typeof _ == "object" && (_.placement && (y = _.placement), _.rects && (d = _.rects === !0 ? await l.getElementRects({
      reference: e,
      floating: t,
      strategy: o
    }) : _.rects), {
      x: u,
      y: h
    } = Gr(d, y, i)), v = -1);
  }
  return {
    x: u,
    y: h,
    placement: y,
    strategy: o,
    middlewareData: f
  };
};
async function Rt(e, t) {
  var r;
  t === void 0 && (t = {});
  const {
    x: s,
    y: o,
    platform: n,
    rects: l,
    elements: a,
    strategy: i
  } = e, {
    boundary: d = "clippingAncestors",
    rootBoundary: u = "viewport",
    elementContext: h = "floating",
    altBoundary: y = !1,
    padding: f = 0
  } = De(t, e), g = Ns(f), w = a[y ? h === "floating" ? "reference" : "floating" : h], $ = nt(await n.getClippingRect({
    element: (r = await (n.isElement == null ? void 0 : n.isElement(w))) == null || r ? w : w.contextElement || await (n.getDocumentElement == null ? void 0 : n.getDocumentElement(a.floating)),
    boundary: d,
    rootBoundary: u,
    strategy: i
  })), T = h === "floating" ? {
    x: s,
    y: o,
    width: l.floating.width,
    height: l.floating.height
  } : l.reference, P = await (n.getOffsetParent == null ? void 0 : n.getOffsetParent(a.floating)), M = await (n.isElement == null ? void 0 : n.isElement(P)) ? await (n.getScale == null ? void 0 : n.getScale(P)) || {
    x: 1,
    y: 1
  } : {
    x: 1,
    y: 1
  }, _ = nt(n.convertOffsetParentRelativeRectToViewportRelativeRect ? await n.convertOffsetParentRelativeRectToViewportRelativeRect({
    elements: a,
    rect: T,
    offsetParent: P,
    strategy: i
  }) : T);
  return {
    top: ($.top - _.top + g.top) / M.y,
    bottom: (_.bottom - $.bottom + g.bottom) / M.y,
    left: ($.left - _.left + g.left) / M.x,
    right: (_.right - $.right + g.right) / M.x
  };
}
const Vu = (e) => ({
  name: "arrow",
  options: e,
  async fn(t) {
    const {
      x: r,
      y: s,
      placement: o,
      rects: n,
      platform: l,
      elements: a,
      middlewareData: i
    } = t, {
      element: d,
      padding: u = 0
    } = De(e, t) || {};
    if (d == null)
      return {};
    const h = Ns(u), y = {
      x: r,
      y: s
    }, f = hr(o), g = gr(f), v = await l.getDimensions(d), w = f === "y", $ = w ? "top" : "left", T = w ? "bottom" : "right", P = w ? "clientHeight" : "clientWidth", M = n.reference[g] + n.reference[f] - y[f] - n.floating[g], _ = y[f] - n.reference[f], I = await (l.getOffsetParent == null ? void 0 : l.getOffsetParent(d));
    let A = I ? I[P] : 0;
    (!A || !await (l.isElement == null ? void 0 : l.isElement(I))) && (A = a.floating[P] || n.floating[g]);
    const N = M / 2 - _ / 2, G = A / 2 - v[g] / 2 - 1, j = ut(h[$], G), Y = ut(h[T], G), B = j, se = A - v[g] - Y, q = A / 2 - v[g] / 2 + N, he = Zt(B, q, se), X = !i.arrow && ue(o) != null && q !== he && n.reference[g] / 2 - (q < B ? j : Y) - v[g] / 2 < 0, oe = X ? q < B ? q - B : q - se : 0;
    return {
      [f]: y[f] + oe,
      data: {
        [f]: he,
        centerOffset: q - he - oe,
        ...X && {
          alignmentOffset: oe
        }
      },
      reset: X
    };
  }
});
function Du(e, t, r) {
  return (e ? [...r.filter((o) => ue(o) === e), ...r.filter((o) => ue(o) !== e)] : r.filter((o) => ge(o) === o)).filter((o) => e ? ue(o) === e || (t ? Tt(o) !== o : !1) : !0);
}
const Hu = function(e) {
  return e === void 0 && (e = {}), {
    name: "autoPlacement",
    options: e,
    async fn(t) {
      var r, s, o;
      const {
        rects: n,
        middlewareData: l,
        placement: a,
        platform: i,
        elements: d
      } = t, {
        crossAxis: u = !1,
        alignment: h,
        allowedPlacements: y = Wr,
        autoAlignment: f = !0,
        ...g
      } = De(e, t), v = h !== void 0 || y === Wr ? Du(h || null, f, y) : y, w = await Rt(t, g), $ = ((r = l.autoPlacement) == null ? void 0 : r.index) || 0, T = v[$];
      if (T == null)
        return {};
      const P = Rs(T, n, await (i.isRTL == null ? void 0 : i.isRTL(d.floating)));
      if (a !== T)
        return {
          reset: {
            placement: v[0]
          }
        };
      const M = [w[ge(T)], w[P[0]], w[P[1]]], _ = [...((s = l.autoPlacement) == null ? void 0 : s.overflows) || [], {
        placement: T,
        overflows: M
      }], I = v[$ + 1];
      if (I)
        return {
          data: {
            index: $ + 1,
            overflows: _
          },
          reset: {
            placement: I
          }
        };
      const A = _.map((j) => {
        const Y = ue(j.placement);
        return [j.placement, Y && u ? (
          // Check along the mainAxis and main crossAxis side.
          j.overflows.slice(0, 2).reduce((B, se) => B + se, 0)
        ) : (
          // Check only the mainAxis.
          j.overflows[0]
        ), j.overflows];
      }).sort((j, Y) => j[1] - Y[1]), G = ((o = A.filter((j) => j[2].slice(
        0,
        // Aligned placements should not check their opposite crossAxis
        // side.
        ue(j[0]) ? 2 : 3
      ).every((Y) => Y <= 0))[0]) == null ? void 0 : o[0]) || A[0][0];
      return G !== a ? {
        data: {
          index: $ + 1,
          overflows: _
        },
        reset: {
          placement: G
        }
      } : {};
    }
  };
}, Wu = function(e) {
  return e === void 0 && (e = {}), {
    name: "flip",
    options: e,
    async fn(t) {
      var r, s;
      const {
        placement: o,
        middlewareData: n,
        rects: l,
        initialPlacement: a,
        platform: i,
        elements: d
      } = t, {
        mainAxis: u = !0,
        crossAxis: h = !0,
        fallbackPlacements: y,
        fallbackStrategy: f = "bestFit",
        fallbackAxisSideDirection: g = "none",
        flipAlignment: v = !0,
        ...w
      } = De(e, t);
      if ((r = n.arrow) != null && r.alignmentOffset)
        return {};
      const $ = ge(o), T = Ne(a), P = ge(a) === a, M = await (i.isRTL == null ? void 0 : i.isRTL(d.floating)), _ = y || (P || !v ? [zt(a)] : Lu(a)), I = g !== "none";
      !y && I && _.push(...Ru(a, v, g, M));
      const A = [a, ..._], N = await Rt(t, w), G = [];
      let j = ((s = n.flip) == null ? void 0 : s.overflows) || [];
      if (u && G.push(N[$]), h) {
        const q = Rs(o, l, M);
        G.push(N[q[0]], N[q[1]]);
      }
      if (j = [...j, {
        placement: o,
        overflows: G
      }], !G.every((q) => q <= 0)) {
        var Y, B;
        const q = (((Y = n.flip) == null ? void 0 : Y.index) || 0) + 1, he = A[q];
        if (he)
          return {
            data: {
              index: q,
              overflows: j
            },
            reset: {
              placement: he
            }
          };
        let X = (B = j.filter((oe) => oe.overflows[0] <= 0).sort((oe, ae) => oe.overflows[1] - ae.overflows[1])[0]) == null ? void 0 : B.placement;
        if (!X)
          switch (f) {
            case "bestFit": {
              var se;
              const oe = (se = j.filter((ae) => {
                if (I) {
                  const Z = Ne(ae.placement);
                  return Z === T || // Create a bias to the `y` side axis due to horizontal
                  // reading directions favoring greater width.
                  Z === "y";
                }
                return !0;
              }).map((ae) => [ae.placement, ae.overflows.filter((Z) => Z > 0).reduce((Z, gt) => Z + gt, 0)]).sort((ae, Z) => ae[1] - Z[1])[0]) == null ? void 0 : se[0];
              oe && (X = oe);
              break;
            }
            case "initialPlacement":
              X = a;
              break;
          }
        if (o !== X)
          return {
            reset: {
              placement: X
            }
          };
      }
      return {};
    }
  };
};
async function Gu(e, t) {
  const {
    placement: r,
    platform: s,
    elements: o
  } = e, n = await (s.isRTL == null ? void 0 : s.isRTL(o.floating)), l = ge(r), a = ue(r), i = Ne(r) === "y", d = ["left", "top"].includes(l) ? -1 : 1, u = n && i ? -1 : 1, h = De(t, e);
  let {
    mainAxis: y,
    crossAxis: f,
    alignmentAxis: g
  } = typeof h == "number" ? {
    mainAxis: h,
    crossAxis: 0,
    alignmentAxis: null
  } : {
    mainAxis: h.mainAxis || 0,
    crossAxis: h.crossAxis || 0,
    alignmentAxis: h.alignmentAxis
  };
  return a && typeof g == "number" && (f = a === "end" ? g * -1 : g), i ? {
    x: f * u,
    y: y * d
  } : {
    x: y * d,
    y: f * u
  };
}
const qu = function(e) {
  return e === void 0 && (e = 0), {
    name: "offset",
    options: e,
    async fn(t) {
      var r, s;
      const {
        x: o,
        y: n,
        placement: l,
        middlewareData: a
      } = t, i = await Gu(t, e);
      return l === ((r = a.offset) == null ? void 0 : r.placement) && (s = a.arrow) != null && s.alignmentOffset ? {} : {
        x: o + i.x,
        y: n + i.y,
        data: {
          ...i,
          placement: l
        }
      };
    }
  };
}, Uu = function(e) {
  return e === void 0 && (e = {}), {
    name: "shift",
    options: e,
    async fn(t) {
      const {
        x: r,
        y: s,
        placement: o
      } = t, {
        mainAxis: n = !0,
        crossAxis: l = !1,
        limiter: a = {
          fn: (w) => {
            let {
              x: $,
              y: T
            } = w;
            return {
              x: $,
              y: T
            };
          }
        },
        ...i
      } = De(e, t), d = {
        x: r,
        y: s
      }, u = await Rt(t, i), h = Ne(ge(o)), y = Es(h);
      let f = d[y], g = d[h];
      if (n) {
        const w = y === "y" ? "top" : "left", $ = y === "y" ? "bottom" : "right", T = f + u[w], P = f - u[$];
        f = Zt(T, f, P);
      }
      if (l) {
        const w = h === "y" ? "top" : "left", $ = h === "y" ? "bottom" : "right", T = g + u[w], P = g - u[$];
        g = Zt(T, g, P);
      }
      const v = a.fn({
        ...t,
        [y]: f,
        [h]: g
      });
      return {
        ...v,
        data: {
          x: v.x - r,
          y: v.y - s,
          enabled: {
            [y]: n,
            [h]: l
          }
        }
      };
    }
  };
}, Yu = function(e) {
  return e === void 0 && (e = {}), {
    name: "size",
    options: e,
    async fn(t) {
      var r, s;
      const {
        placement: o,
        rects: n,
        platform: l,
        elements: a
      } = t, {
        apply: i = () => {
        },
        ...d
      } = De(e, t), u = await Rt(t, d), h = ge(o), y = ue(o), f = Ne(o) === "y", {
        width: g,
        height: v
      } = n.floating;
      let w, $;
      h === "top" || h === "bottom" ? (w = h, $ = y === (await (l.isRTL == null ? void 0 : l.isRTL(a.floating)) ? "start" : "end") ? "left" : "right") : ($ = h, w = y === "end" ? "top" : "bottom");
      const T = v - u.top - u.bottom, P = g - u.left - u.right, M = ut(v - u[w], T), _ = ut(g - u[$], P), I = !t.middlewareData.shift;
      let A = M, N = _;
      if ((r = t.middlewareData.shift) != null && r.enabled.x && (N = P), (s = t.middlewareData.shift) != null && s.enabled.y && (A = T), I && !y) {
        const j = Me(u.left, 0), Y = Me(u.right, 0), B = Me(u.top, 0), se = Me(u.bottom, 0);
        f ? N = g - 2 * (j !== 0 || Y !== 0 ? j + Y : Me(u.left, u.right)) : A = v - 2 * (B !== 0 || se !== 0 ? B + se : Me(u.top, u.bottom));
      }
      await i({
        ...t,
        availableWidth: N,
        availableHeight: A
      });
      const G = await l.getDimensions(a.floating);
      return g !== G.width || v !== G.height ? {
        reset: {
          rects: !0
        }
      } : {};
    }
  };
};
function le(e) {
  var t;
  return ((t = e.ownerDocument) == null ? void 0 : t.defaultView) || window;
}
function fe(e) {
  return le(e).getComputedStyle(e);
}
const qr = Math.min, at = Math.max, Pt = Math.round;
function js(e) {
  const t = fe(e);
  let r = parseFloat(t.width), s = parseFloat(t.height);
  const o = e.offsetWidth, n = e.offsetHeight, l = Pt(r) !== o || Pt(s) !== n;
  return l && (r = o, s = n), { width: r, height: s, fallback: l };
}
function Pe(e) {
  return Ds(e) ? (e.nodeName || "").toLowerCase() : "";
}
let yt;
function Vs() {
  if (yt) return yt;
  const e = navigator.userAgentData;
  return e && Array.isArray(e.brands) ? (yt = e.brands.map((t) => t.brand + "/" + t.version).join(" "), yt) : navigator.userAgent;
}
function pe(e) {
  return e instanceof le(e).HTMLElement;
}
function Se(e) {
  return e instanceof le(e).Element;
}
function Ds(e) {
  return e instanceof le(e).Node;
}
function Ur(e) {
  return typeof ShadowRoot > "u" ? !1 : e instanceof le(e).ShadowRoot || e instanceof ShadowRoot;
}
function Nt(e) {
  const { overflow: t, overflowX: r, overflowY: s, display: o } = fe(e);
  return /auto|scroll|overlay|hidden|clip/.test(t + s + r) && !["inline", "contents"].includes(o);
}
function Ku(e) {
  return ["table", "td", "th"].includes(Pe(e));
}
function Qt(e) {
  const t = /firefox/i.test(Vs()), r = fe(e), s = r.backdropFilter || r.WebkitBackdropFilter;
  return r.transform !== "none" || r.perspective !== "none" || !!s && s !== "none" || t && r.willChange === "filter" || t && !!r.filter && r.filter !== "none" || ["transform", "perspective"].some((o) => r.willChange.includes(o)) || ["paint", "layout", "strict", "content"].some((o) => {
    const n = r.contain;
    return n != null && n.includes(o);
  });
}
function Hs() {
  return !/^((?!chrome|android).)*safari/i.test(Vs());
}
function mr(e) {
  return ["html", "body", "#document"].includes(Pe(e));
}
function Ws(e) {
  return Se(e) ? e : e.contextElement;
}
const Gs = { x: 1, y: 1 };
function Ue(e) {
  const t = Ws(e);
  if (!pe(t)) return Gs;
  const r = t.getBoundingClientRect(), { width: s, height: o, fallback: n } = js(t);
  let l = (n ? Pt(r.width) : r.width) / s, a = (n ? Pt(r.height) : r.height) / o;
  return l && Number.isFinite(l) || (l = 1), a && Number.isFinite(a) || (a = 1), { x: l, y: a };
}
function ct(e, t, r, s) {
  var o, n;
  t === void 0 && (t = !1), r === void 0 && (r = !1);
  const l = e.getBoundingClientRect(), a = Ws(e);
  let i = Gs;
  t && (s ? Se(s) && (i = Ue(s)) : i = Ue(e));
  const d = a ? le(a) : window, u = !Hs() && r;
  let h = (l.left + (u && ((o = d.visualViewport) == null ? void 0 : o.offsetLeft) || 0)) / i.x, y = (l.top + (u && ((n = d.visualViewport) == null ? void 0 : n.offsetTop) || 0)) / i.y, f = l.width / i.x, g = l.height / i.y;
  if (a) {
    const v = le(a), w = s && Se(s) ? le(s) : s;
    let $ = v.frameElement;
    for (; $ && s && w !== v; ) {
      const T = Ue($), P = $.getBoundingClientRect(), M = getComputedStyle($);
      P.x += ($.clientLeft + parseFloat(M.paddingLeft)) * T.x, P.y += ($.clientTop + parseFloat(M.paddingTop)) * T.y, h *= T.x, y *= T.y, f *= T.x, g *= T.y, h += P.x, y += P.y, $ = le($).frameElement;
    }
  }
  return { width: f, height: g, top: y, right: h + f, bottom: y + g, left: h, x: h, y };
}
function Te(e) {
  return ((Ds(e) ? e.ownerDocument : e.document) || window.document).documentElement;
}
function jt(e) {
  return Se(e) ? { scrollLeft: e.scrollLeft, scrollTop: e.scrollTop } : { scrollLeft: e.pageXOffset, scrollTop: e.pageYOffset };
}
function qs(e) {
  return ct(Te(e)).left + jt(e).scrollLeft;
}
function ft(e) {
  if (Pe(e) === "html") return e;
  const t = e.assignedSlot || e.parentNode || Ur(e) && e.host || Te(e);
  return Ur(t) ? t.host : t;
}
function Us(e) {
  const t = ft(e);
  return mr(t) ? t.ownerDocument.body : pe(t) && Nt(t) ? t : Us(t);
}
function At(e, t) {
  var r;
  t === void 0 && (t = []);
  const s = Us(e), o = s === ((r = e.ownerDocument) == null ? void 0 : r.body), n = le(s);
  return o ? t.concat(n, n.visualViewport || [], Nt(s) ? s : []) : t.concat(s, At(s));
}
function Yr(e, t, r) {
  return t === "viewport" ? nt(function(s, o) {
    const n = le(s), l = Te(s), a = n.visualViewport;
    let i = l.clientWidth, d = l.clientHeight, u = 0, h = 0;
    if (a) {
      i = a.width, d = a.height;
      const y = Hs();
      (y || !y && o === "fixed") && (u = a.offsetLeft, h = a.offsetTop);
    }
    return { width: i, height: d, x: u, y: h };
  }(e, r)) : Se(t) ? nt(function(s, o) {
    const n = ct(s, !0, o === "fixed"), l = n.top + s.clientTop, a = n.left + s.clientLeft, i = pe(s) ? Ue(s) : { x: 1, y: 1 };
    return { width: s.clientWidth * i.x, height: s.clientHeight * i.y, x: a * i.x, y: l * i.y };
  }(t, r)) : nt(function(s) {
    const o = Te(s), n = jt(s), l = s.ownerDocument.body, a = at(o.scrollWidth, o.clientWidth, l.scrollWidth, l.clientWidth), i = at(o.scrollHeight, o.clientHeight, l.scrollHeight, l.clientHeight);
    let d = -n.scrollLeft + qs(s);
    const u = -n.scrollTop;
    return fe(l).direction === "rtl" && (d += at(o.clientWidth, l.clientWidth) - a), { width: a, height: i, x: d, y: u };
  }(Te(e)));
}
function Kr(e) {
  return pe(e) && fe(e).position !== "fixed" ? e.offsetParent : null;
}
function Jr(e) {
  const t = le(e);
  let r = Kr(e);
  for (; r && Ku(r) && fe(r).position === "static"; ) r = Kr(r);
  return r && (Pe(r) === "html" || Pe(r) === "body" && fe(r).position === "static" && !Qt(r)) ? t : r || function(s) {
    let o = ft(s);
    for (; pe(o) && !mr(o); ) {
      if (Qt(o)) return o;
      o = ft(o);
    }
    return null;
  }(e) || t;
}
function Ju(e, t, r) {
  const s = pe(t), o = Te(t), n = ct(e, !0, r === "fixed", t);
  let l = { scrollLeft: 0, scrollTop: 0 };
  const a = { x: 0, y: 0 };
  if (s || !s && r !== "fixed") if ((Pe(t) !== "body" || Nt(o)) && (l = jt(t)), pe(t)) {
    const i = ct(t, !0);
    a.x = i.x + t.clientLeft, a.y = i.y + t.clientTop;
  } else o && (a.x = qs(o));
  return { x: n.left + l.scrollLeft - a.x, y: n.top + l.scrollTop - a.y, width: n.width, height: n.height };
}
const Xu = { getClippingRect: function(e) {
  let { element: t, boundary: r, rootBoundary: s, strategy: o } = e;
  const n = r === "clippingAncestors" ? function(d, u) {
    const h = u.get(d);
    if (h) return h;
    let y = At(d).filter((w) => Se(w) && Pe(w) !== "body"), f = null;
    const g = fe(d).position === "fixed";
    let v = g ? ft(d) : d;
    for (; Se(v) && !mr(v); ) {
      const w = fe(v), $ = Qt(v);
      (g ? $ || f : $ || w.position !== "static" || !f || !["absolute", "fixed"].includes(f.position)) ? f = w : y = y.filter((T) => T !== v), v = ft(v);
    }
    return u.set(d, y), y;
  }(t, this._c) : [].concat(r), l = [...n, s], a = l[0], i = l.reduce((d, u) => {
    const h = Yr(t, u, o);
    return d.top = at(h.top, d.top), d.right = qr(h.right, d.right), d.bottom = qr(h.bottom, d.bottom), d.left = at(h.left, d.left), d;
  }, Yr(t, a, o));
  return { width: i.right - i.left, height: i.bottom - i.top, x: i.left, y: i.top };
}, convertOffsetParentRelativeRectToViewportRelativeRect: function(e) {
  let { rect: t, offsetParent: r, strategy: s } = e;
  const o = pe(r), n = Te(r);
  if (r === n) return t;
  let l = { scrollLeft: 0, scrollTop: 0 }, a = { x: 1, y: 1 };
  const i = { x: 0, y: 0 };
  if ((o || !o && s !== "fixed") && ((Pe(r) !== "body" || Nt(n)) && (l = jt(r)), pe(r))) {
    const d = ct(r);
    a = Ue(r), i.x = d.x + r.clientLeft, i.y = d.y + r.clientTop;
  }
  return { width: t.width * a.x, height: t.height * a.y, x: t.x * a.x - l.scrollLeft * a.x + i.x, y: t.y * a.y - l.scrollTop * a.y + i.y };
}, isElement: Se, getDimensions: function(e) {
  return pe(e) ? js(e) : e.getBoundingClientRect();
}, getOffsetParent: Jr, getDocumentElement: Te, getScale: Ue, async getElementRects(e) {
  let { reference: t, floating: r, strategy: s } = e;
  const o = this.getOffsetParent || Jr, n = this.getDimensions;
  return { reference: Ju(t, await o(r), s), floating: { x: 0, y: 0, ...await n(r) } };
}, getClientRects: (e) => Array.from(e.getClientRects()), isRTL: (e) => fe(e).direction === "rtl" }, Zu = (e, t, r) => {
  const s = /* @__PURE__ */ new Map(), o = { platform: Xu, ...r }, n = { ...o.platform, _c: s };
  return ju(e, t, { ...o, platform: n });
}, Oe = {
  // Disable popper components
  disabled: !1,
  // Default position offset along main axis (px)
  distance: 5,
  // Default position offset along cross axis (px)
  skidding: 0,
  // Default container where the tooltip will be appended
  container: "body",
  // Element used to compute position and size boundaries
  boundary: void 0,
  // Skip delay & CSS transitions when another popper is shown, so that the popper appear to instanly move to the new position.
  instantMove: !1,
  // Auto destroy tooltip DOM nodes (ms)
  disposeTimeout: 150,
  // Triggers on the popper itself
  popperTriggers: [],
  // Positioning strategy
  strategy: "absolute",
  // Prevent overflow
  preventOverflow: !0,
  // Flip to the opposite placement if needed
  flip: !0,
  // Shift on the cross axis to prevent the popper from overflowing
  shift: !0,
  // Overflow padding (px)
  overflowPadding: 0,
  // Arrow padding (px)
  arrowPadding: 0,
  // Compute arrow overflow (useful to hide it)
  arrowOverflow: !0,
  /**
   * By default, compute autohide on 'click'.
   */
  autoHideOnMousedown: !1,
  // Themes
  themes: {
    tooltip: {
      // Default tooltip placement relative to target element
      placement: "top",
      // Default events that trigger the tooltip
      triggers: ["hover", "focus", "touch"],
      // Close tooltip on click on tooltip target
      hideTriggers: (e) => [...e, "click"],
      // Delay (ms)
      delay: {
        show: 200,
        hide: 0
      },
      // Update popper on content resize
      handleResize: !1,
      // Enable HTML content in directive
      html: !1,
      // Displayed when tooltip content is loading
      loadingContent: "..."
    },
    dropdown: {
      // Default dropdown placement relative to target element
      placement: "bottom",
      // Default events that trigger the dropdown
      triggers: ["click"],
      // Delay (ms)
      delay: 0,
      // Update popper on content resize
      handleResize: !0,
      // Hide on clock outside
      autoHide: !0
    },
    menu: {
      $extend: "dropdown",
      triggers: ["hover", "focus"],
      popperTriggers: ["hover"],
      delay: {
        show: 0,
        hide: 400
      }
    }
  }
};
function er(e, t) {
  let r = Oe.themes[e] || {}, s;
  do
    s = r[t], typeof s > "u" ? r.$extend ? r = Oe.themes[r.$extend] || {} : (r = null, s = Oe[t]) : r = null;
  while (r);
  return s;
}
function Qu(e) {
  const t = [e];
  let r = Oe.themes[e] || {};
  do
    r.$extend && !r.$resetCss ? (t.push(r.$extend), r = Oe.themes[r.$extend] || {}) : r = null;
  while (r);
  return t.map((s) => `v-popper--theme-${s}`);
}
function Xr(e) {
  const t = [e];
  let r = Oe.themes[e] || {};
  do
    r.$extend ? (t.push(r.$extend), r = Oe.themes[r.$extend] || {}) : r = null;
  while (r);
  return t;
}
let pt = !1;
if (typeof window < "u") {
  pt = !1;
  try {
    const e = Object.defineProperty({}, "passive", {
      get() {
        pt = !0;
      }
    });
    window.addEventListener("test", null, e);
  } catch {
  }
}
let Ys = !1;
typeof window < "u" && typeof navigator < "u" && (Ys = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream);
const ec = ["auto", "top", "bottom", "left", "right"].reduce((e, t) => e.concat([
  t,
  `${t}-start`,
  `${t}-end`
]), []), Zr = {
  hover: "mouseenter",
  focus: "focus",
  click: "click",
  touch: "touchstart",
  pointer: "pointerdown"
}, Qr = {
  hover: "mouseleave",
  focus: "blur",
  click: "click",
  touch: "touchend",
  pointer: "pointerup"
};
function es(e, t) {
  const r = e.indexOf(t);
  r !== -1 && e.splice(r, 1);
}
function Kt() {
  return new Promise((e) => requestAnimationFrame(() => {
    requestAnimationFrame(e);
  }));
}
const de = [];
let Be = null;
const ts = {};
function rs(e) {
  let t = ts[e];
  return t || (t = ts[e] = []), t;
}
let tr = function() {
};
typeof window < "u" && (tr = window.Element);
function L(e) {
  return function(t) {
    return er(t.theme, e);
  };
}
const Jt = "__floating-vue__popper", Ks = () => S({
  name: "VPopper",
  provide() {
    return {
      [Jt]: {
        parentPopper: this
      }
    };
  },
  inject: {
    [Jt]: { default: null }
  },
  props: {
    theme: {
      type: String,
      required: !0
    },
    targetNodes: {
      type: Function,
      required: !0
    },
    referenceNode: {
      type: Function,
      default: null
    },
    popperNode: {
      type: Function,
      required: !0
    },
    shown: {
      type: Boolean,
      default: !1
    },
    showGroup: {
      type: String,
      default: null
    },
    // eslint-disable-next-line vue/require-prop-types
    ariaId: {
      default: null
    },
    disabled: {
      type: Boolean,
      default: L("disabled")
    },
    positioningDisabled: {
      type: Boolean,
      default: L("positioningDisabled")
    },
    placement: {
      type: String,
      default: L("placement"),
      validator: (e) => ec.includes(e)
    },
    delay: {
      type: [String, Number, Object],
      default: L("delay")
    },
    distance: {
      type: [Number, String],
      default: L("distance")
    },
    skidding: {
      type: [Number, String],
      default: L("skidding")
    },
    triggers: {
      type: Array,
      default: L("triggers")
    },
    showTriggers: {
      type: [Array, Function],
      default: L("showTriggers")
    },
    hideTriggers: {
      type: [Array, Function],
      default: L("hideTriggers")
    },
    popperTriggers: {
      type: Array,
      default: L("popperTriggers")
    },
    popperShowTriggers: {
      type: [Array, Function],
      default: L("popperShowTriggers")
    },
    popperHideTriggers: {
      type: [Array, Function],
      default: L("popperHideTriggers")
    },
    container: {
      type: [String, Object, tr, Boolean],
      default: L("container")
    },
    boundary: {
      type: [String, tr],
      default: L("boundary")
    },
    strategy: {
      type: String,
      validator: (e) => ["absolute", "fixed"].includes(e),
      default: L("strategy")
    },
    autoHide: {
      type: [Boolean, Function],
      default: L("autoHide")
    },
    handleResize: {
      type: Boolean,
      default: L("handleResize")
    },
    instantMove: {
      type: Boolean,
      default: L("instantMove")
    },
    eagerMount: {
      type: Boolean,
      default: L("eagerMount")
    },
    popperClass: {
      type: [String, Array, Object],
      default: L("popperClass")
    },
    computeTransformOrigin: {
      type: Boolean,
      default: L("computeTransformOrigin")
    },
    /**
     * @deprecated
     */
    autoMinSize: {
      type: Boolean,
      default: L("autoMinSize")
    },
    autoSize: {
      type: [Boolean, String],
      default: L("autoSize")
    },
    /**
     * @deprecated
     */
    autoMaxSize: {
      type: Boolean,
      default: L("autoMaxSize")
    },
    autoBoundaryMaxSize: {
      type: Boolean,
      default: L("autoBoundaryMaxSize")
    },
    preventOverflow: {
      type: Boolean,
      default: L("preventOverflow")
    },
    overflowPadding: {
      type: [Number, String],
      default: L("overflowPadding")
    },
    arrowPadding: {
      type: [Number, String],
      default: L("arrowPadding")
    },
    arrowOverflow: {
      type: Boolean,
      default: L("arrowOverflow")
    },
    flip: {
      type: Boolean,
      default: L("flip")
    },
    shift: {
      type: Boolean,
      default: L("shift")
    },
    shiftCrossAxis: {
      type: Boolean,
      default: L("shiftCrossAxis")
    },
    noAutoFocus: {
      type: Boolean,
      default: L("noAutoFocus")
    },
    disposeTimeout: {
      type: Number,
      default: L("disposeTimeout")
    }
  },
  emits: {
    show: () => !0,
    hide: () => !0,
    "update:shown": (e) => !0,
    "apply-show": () => !0,
    "apply-hide": () => !0,
    "close-group": () => !0,
    "close-directive": () => !0,
    "auto-hide": () => !0,
    resize: () => !0
  },
  data() {
    return {
      isShown: !1,
      isMounted: !1,
      skipTransition: !1,
      classes: {
        showFrom: !1,
        showTo: !1,
        hideFrom: !1,
        hideTo: !0
      },
      result: {
        x: 0,
        y: 0,
        placement: "",
        strategy: this.strategy,
        arrow: {
          x: 0,
          y: 0,
          centerOffset: 0
        },
        transformOrigin: null
      },
      randomId: `popper_${[Math.random(), Date.now()].map((e) => e.toString(36).substring(2, 10)).join("_")}`,
      shownChildren: /* @__PURE__ */ new Set(),
      lastAutoHide: !0,
      pendingHide: !1,
      containsGlobalTarget: !1,
      isDisposed: !0,
      mouseDownContains: !1
    };
  },
  computed: {
    popperId() {
      return this.ariaId != null ? this.ariaId : this.randomId;
    },
    shouldMountContent() {
      return this.eagerMount || this.isMounted;
    },
    slotData() {
      return {
        popperId: this.popperId,
        isShown: this.isShown,
        shouldMountContent: this.shouldMountContent,
        skipTransition: this.skipTransition,
        autoHide: typeof this.autoHide == "function" ? this.lastAutoHide : this.autoHide,
        show: this.show,
        hide: this.hide,
        handleResize: this.handleResize,
        onResize: this.onResize,
        classes: {
          ...this.classes,
          popperClass: this.popperClass
        },
        result: this.positioningDisabled ? null : this.result,
        attrs: this.$attrs
      };
    },
    parentPopper() {
      var e;
      return (e = this[Jt]) == null ? void 0 : e.parentPopper;
    },
    hasPopperShowTriggerHover() {
      var e, t;
      return ((e = this.popperTriggers) == null ? void 0 : e.includes("hover")) || ((t = this.popperShowTriggers) == null ? void 0 : t.includes("hover"));
    }
  },
  watch: {
    shown: "$_autoShowHide",
    disabled(e) {
      e ? this.dispose() : this.init();
    },
    async container() {
      this.isShown && (this.$_ensureTeleport(), await this.$_computePosition());
    },
    triggers: {
      handler: "$_refreshListeners",
      deep: !0
    },
    positioningDisabled: "$_refreshListeners",
    ...[
      "placement",
      "distance",
      "skidding",
      "boundary",
      "strategy",
      "overflowPadding",
      "arrowPadding",
      "preventOverflow",
      "shift",
      "shiftCrossAxis",
      "flip"
    ].reduce((e, t) => (e[t] = "$_computePosition", e), {})
  },
  created() {
    this.autoMinSize && console.warn('[floating-vue] `autoMinSize` option is deprecated. Use `autoSize="min"` instead.'), this.autoMaxSize && console.warn("[floating-vue] `autoMaxSize` option is deprecated. Use `autoBoundaryMaxSize` instead.");
  },
  mounted() {
    this.init(), this.$_detachPopperNode();
  },
  activated() {
    this.$_autoShowHide();
  },
  deactivated() {
    this.hide();
  },
  beforeUnmount() {
    this.dispose();
  },
  methods: {
    show({ event: e = null, skipDelay: t = !1, force: r = !1 } = {}) {
      var s, o;
      (s = this.parentPopper) != null && s.lockedChild && this.parentPopper.lockedChild !== this || (this.pendingHide = !1, (r || !this.disabled) && (((o = this.parentPopper) == null ? void 0 : o.lockedChild) === this && (this.parentPopper.lockedChild = null), this.$_scheduleShow(e, t), this.$emit("show"), this.$_showFrameLocked = !0, requestAnimationFrame(() => {
        this.$_showFrameLocked = !1;
      })), this.$emit("update:shown", !0));
    },
    hide({ event: e = null, skipDelay: t = !1 } = {}) {
      var r;
      if (!this.$_hideInProgress) {
        if (this.shownChildren.size > 0) {
          this.pendingHide = !0;
          return;
        }
        if (this.hasPopperShowTriggerHover && this.$_isAimingPopper()) {
          this.parentPopper && (this.parentPopper.lockedChild = this, clearTimeout(this.parentPopper.lockedChildTimer), this.parentPopper.lockedChildTimer = setTimeout(() => {
            this.parentPopper.lockedChild === this && (this.parentPopper.lockedChild.hide({ skipDelay: t }), this.parentPopper.lockedChild = null);
          }, 1e3));
          return;
        }
        ((r = this.parentPopper) == null ? void 0 : r.lockedChild) === this && (this.parentPopper.lockedChild = null), this.pendingHide = !1, this.$_scheduleHide(e, t), this.$emit("hide"), this.$emit("update:shown", !1);
      }
    },
    init() {
      var e;
      this.isDisposed && (this.isDisposed = !1, this.isMounted = !1, this.$_events = [], this.$_preventShow = !1, this.$_referenceNode = ((e = this.referenceNode) == null ? void 0 : e.call(this)) ?? this.$el, this.$_targetNodes = this.targetNodes().filter((t) => t.nodeType === t.ELEMENT_NODE), this.$_popperNode = this.popperNode(), this.$_innerNode = this.$_popperNode.querySelector(".v-popper__inner"), this.$_arrowNode = this.$_popperNode.querySelector(".v-popper__arrow-container"), this.$_swapTargetAttrs("title", "data-original-title"), this.$_detachPopperNode(), this.triggers.length && this.$_addEventListeners(), this.shown && this.show());
    },
    dispose() {
      this.isDisposed || (this.isDisposed = !0, this.$_removeEventListeners(), this.hide({ skipDelay: !0 }), this.$_detachPopperNode(), this.isMounted = !1, this.isShown = !1, this.$_updateParentShownChildren(!1), this.$_swapTargetAttrs("data-original-title", "title"));
    },
    async onResize() {
      this.isShown && (await this.$_computePosition(), this.$emit("resize"));
    },
    async $_computePosition() {
      if (this.isDisposed || this.positioningDisabled)
        return;
      const e = {
        strategy: this.strategy,
        middleware: []
      };
      (this.distance || this.skidding) && e.middleware.push(qu({
        mainAxis: this.distance,
        crossAxis: this.skidding
      }));
      const t = this.placement.startsWith("auto");
      if (t ? e.middleware.push(Hu({
        alignment: this.placement.split("-")[1] ?? ""
      })) : e.placement = this.placement, this.preventOverflow && (this.shift && e.middleware.push(Uu({
        padding: this.overflowPadding,
        boundary: this.boundary,
        crossAxis: this.shiftCrossAxis
      })), !t && this.flip && e.middleware.push(Wu({
        padding: this.overflowPadding,
        boundary: this.boundary
      }))), e.middleware.push(Vu({
        element: this.$_arrowNode,
        padding: this.arrowPadding
      })), this.arrowOverflow && e.middleware.push({
        name: "arrowOverflow",
        fn: ({ placement: s, rects: o, middlewareData: n }) => {
          let l;
          const { centerOffset: a } = n.arrow;
          return s.startsWith("top") || s.startsWith("bottom") ? l = Math.abs(a) > o.reference.width / 2 : l = Math.abs(a) > o.reference.height / 2, {
            data: {
              overflow: l
            }
          };
        }
      }), this.autoMinSize || this.autoSize) {
        const s = this.autoSize ? this.autoSize : this.autoMinSize ? "min" : null;
        e.middleware.push({
          name: "autoSize",
          fn: ({ rects: o, placement: n, middlewareData: l }) => {
            var a;
            if ((a = l.autoSize) != null && a.skip)
              return {};
            let i, d;
            return n.startsWith("top") || n.startsWith("bottom") ? i = o.reference.width : d = o.reference.height, this.$_innerNode.style[s === "min" ? "minWidth" : s === "max" ? "maxWidth" : "width"] = i != null ? `${i}px` : null, this.$_innerNode.style[s === "min" ? "minHeight" : s === "max" ? "maxHeight" : "height"] = d != null ? `${d}px` : null, {
              data: {
                skip: !0
              },
              reset: {
                rects: !0
              }
            };
          }
        });
      }
      (this.autoMaxSize || this.autoBoundaryMaxSize) && (this.$_innerNode.style.maxWidth = null, this.$_innerNode.style.maxHeight = null, e.middleware.push(Yu({
        boundary: this.boundary,
        padding: this.overflowPadding,
        apply: ({ availableWidth: s, availableHeight: o }) => {
          this.$_innerNode.style.maxWidth = s != null ? `${s}px` : null, this.$_innerNode.style.maxHeight = o != null ? `${o}px` : null;
        }
      })));
      const r = await Zu(this.$_referenceNode, this.$_popperNode, e);
      Object.assign(this.result, {
        x: r.x,
        y: r.y,
        placement: r.placement,
        strategy: r.strategy,
        arrow: {
          ...r.middlewareData.arrow,
          ...r.middlewareData.arrowOverflow
        }
      });
    },
    $_scheduleShow(e, t = !1) {
      if (this.$_updateParentShownChildren(!0), this.$_hideInProgress = !1, clearTimeout(this.$_scheduleTimer), Be && this.instantMove && Be.instantMove && Be !== this.parentPopper) {
        Be.$_applyHide(!0), this.$_applyShow(!0);
        return;
      }
      t ? this.$_applyShow() : this.$_scheduleTimer = setTimeout(this.$_applyShow.bind(this), this.$_computeDelay("show"));
    },
    $_scheduleHide(e, t = !1) {
      if (this.shownChildren.size > 0) {
        this.pendingHide = !0;
        return;
      }
      this.$_updateParentShownChildren(!1), this.$_hideInProgress = !0, clearTimeout(this.$_scheduleTimer), this.isShown && (Be = this), t ? this.$_applyHide() : this.$_scheduleTimer = setTimeout(this.$_applyHide.bind(this), this.$_computeDelay("hide"));
    },
    $_computeDelay(e) {
      const t = this.delay;
      return parseInt(t && t[e] || t || 0);
    },
    async $_applyShow(e = !1) {
      clearTimeout(this.$_disposeTimer), clearTimeout(this.$_scheduleTimer), this.skipTransition = e, !this.isShown && (this.$_ensureTeleport(), await Kt(), await this.$_computePosition(), await this.$_applyShowEffect(), this.positioningDisabled || this.$_registerEventListeners([
        ...At(this.$_referenceNode),
        ...At(this.$_popperNode)
      ], "scroll", () => {
        this.$_computePosition();
      }));
    },
    async $_applyShowEffect() {
      if (this.$_hideInProgress)
        return;
      if (this.computeTransformOrigin) {
        const t = this.$_referenceNode.getBoundingClientRect(), r = this.$_popperNode.querySelector(".v-popper__wrapper"), s = r.parentNode.getBoundingClientRect(), o = t.x + t.width / 2 - (s.left + r.offsetLeft), n = t.y + t.height / 2 - (s.top + r.offsetTop);
        this.result.transformOrigin = `${o}px ${n}px`;
      }
      this.isShown = !0, this.$_applyAttrsToTarget({
        "aria-describedby": this.popperId,
        "data-popper-shown": ""
      });
      const e = this.showGroup;
      if (e) {
        let t;
        for (let r = 0; r < de.length; r++)
          t = de[r], t.showGroup !== e && (t.hide(), t.$emit("close-group"));
      }
      de.push(this), document.body.classList.add("v-popper--some-open");
      for (const t of Xr(this.theme))
        rs(t).push(this), document.body.classList.add(`v-popper--some-open--${t}`);
      this.$emit("apply-show"), this.classes.showFrom = !0, this.classes.showTo = !1, this.classes.hideFrom = !1, this.classes.hideTo = !1, await Kt(), this.classes.showFrom = !1, this.classes.showTo = !0, this.noAutoFocus || this.$_popperNode.focus();
    },
    async $_applyHide(e = !1) {
      if (this.shownChildren.size > 0) {
        this.pendingHide = !0, this.$_hideInProgress = !1;
        return;
      }
      if (clearTimeout(this.$_scheduleTimer), !this.isShown)
        return;
      this.skipTransition = e, es(de, this), de.length === 0 && document.body.classList.remove("v-popper--some-open");
      for (const r of Xr(this.theme)) {
        const s = rs(r);
        es(s, this), s.length === 0 && document.body.classList.remove(`v-popper--some-open--${r}`);
      }
      Be === this && (Be = null), this.isShown = !1, this.$_applyAttrsToTarget({
        "aria-describedby": void 0,
        "data-popper-shown": void 0
      }), clearTimeout(this.$_disposeTimer);
      const t = this.disposeTimeout;
      t !== null && (this.$_disposeTimer = setTimeout(() => {
        this.$_popperNode && (this.$_detachPopperNode(), this.isMounted = !1);
      }, t)), this.$_removeEventListeners("scroll"), this.$emit("apply-hide"), this.classes.showFrom = !1, this.classes.showTo = !1, this.classes.hideFrom = !0, this.classes.hideTo = !1, await Kt(), this.classes.hideFrom = !1, this.classes.hideTo = !0;
    },
    $_autoShowHide() {
      this.shown ? this.show() : this.hide();
    },
    $_ensureTeleport() {
      if (this.isDisposed)
        return;
      let e = this.container;
      if (typeof e == "string" ? e = window.document.querySelector(e) : e === !1 && (e = this.$_targetNodes[0].parentNode), !e)
        throw new Error("No container for popover: " + this.container);
      e.appendChild(this.$_popperNode), this.isMounted = !0;
    },
    $_addEventListeners() {
      const e = (r) => {
        this.isShown && !this.$_hideInProgress || (r.usedByTooltip = !0, !this.$_preventShow && this.show({ event: r }));
      };
      this.$_registerTriggerListeners(this.$_targetNodes, Zr, this.triggers, this.showTriggers, e), this.$_registerTriggerListeners([this.$_popperNode], Zr, this.popperTriggers, this.popperShowTriggers, e);
      const t = (r) => {
        r.usedByTooltip || this.hide({ event: r });
      };
      this.$_registerTriggerListeners(this.$_targetNodes, Qr, this.triggers, this.hideTriggers, t), this.$_registerTriggerListeners([this.$_popperNode], Qr, this.popperTriggers, this.popperHideTriggers, t);
    },
    $_registerEventListeners(e, t, r) {
      this.$_events.push({ targetNodes: e, eventType: t, handler: r }), e.forEach((s) => s.addEventListener(t, r, pt ? {
        passive: !0
      } : void 0));
    },
    $_registerTriggerListeners(e, t, r, s, o) {
      let n = r;
      s != null && (n = typeof s == "function" ? s(n) : s), n.forEach((l) => {
        const a = t[l];
        a && this.$_registerEventListeners(e, a, o);
      });
    },
    $_removeEventListeners(e) {
      const t = [];
      this.$_events.forEach((r) => {
        const { targetNodes: s, eventType: o, handler: n } = r;
        !e || e === o ? s.forEach((l) => l.removeEventListener(o, n)) : t.push(r);
      }), this.$_events = t;
    },
    $_refreshListeners() {
      this.isDisposed || (this.$_removeEventListeners(), this.$_addEventListeners());
    },
    $_handleGlobalClose(e, t = !1) {
      this.$_showFrameLocked || (this.hide({ event: e }), e.closePopover ? this.$emit("close-directive") : this.$emit("auto-hide"), t && (this.$_preventShow = !0, setTimeout(() => {
        this.$_preventShow = !1;
      }, 300)));
    },
    $_detachPopperNode() {
      this.$_popperNode.parentNode && this.$_popperNode.parentNode.removeChild(this.$_popperNode);
    },
    $_swapTargetAttrs(e, t) {
      for (const r of this.$_targetNodes) {
        const s = r.getAttribute(e);
        s && (r.removeAttribute(e), r.setAttribute(t, s));
      }
    },
    $_applyAttrsToTarget(e) {
      for (const t of this.$_targetNodes)
        for (const r in e) {
          const s = e[r];
          s == null ? t.removeAttribute(r) : t.setAttribute(r, s);
        }
    },
    $_updateParentShownChildren(e) {
      let t = this.parentPopper;
      for (; t; )
        e ? t.shownChildren.add(this.randomId) : (t.shownChildren.delete(this.randomId), t.pendingHide && t.hide()), t = t.parentPopper;
    },
    $_isAimingPopper() {
      const e = this.$_referenceNode.getBoundingClientRect();
      if (lt >= e.left && lt <= e.right && it >= e.top && it <= e.bottom) {
        const t = this.$_popperNode.getBoundingClientRect(), r = lt - Ce, s = it - _e, o = t.left + t.width / 2 - Ce + (t.top + t.height / 2) - _e + t.width + t.height, n = Ce + r * o, l = _e + s * o;
        return wt(Ce, _e, n, l, t.left, t.top, t.left, t.bottom) || // Left edge
        wt(Ce, _e, n, l, t.left, t.top, t.right, t.top) || // Top edge
        wt(Ce, _e, n, l, t.right, t.top, t.right, t.bottom) || // Right edge
        wt(Ce, _e, n, l, t.left, t.bottom, t.right, t.bottom);
      }
      return !1;
    }
  },
  render() {
    return this.$slots.default(this.slotData);
  }
});
if (typeof document < "u" && typeof window < "u") {
  if (Ys) {
    const e = pt ? {
      passive: !0,
      capture: !0
    } : !0;
    document.addEventListener("touchstart", (t) => ss(t), e), document.addEventListener("touchend", (t) => os(t, !0), e);
  } else
    window.addEventListener("mousedown", (e) => ss(e), !0), window.addEventListener("click", (e) => os(e, !1), !0);
  window.addEventListener("resize", sc);
}
function ss(e, t) {
  for (let r = 0; r < de.length; r++) {
    const s = de[r];
    try {
      s.mouseDownContains = s.popperNode().contains(e.target);
    } catch {
    }
  }
}
function os(e, t) {
  tc(e, t);
}
function tc(e, t) {
  const r = {};
  for (let s = de.length - 1; s >= 0; s--) {
    const o = de[s];
    try {
      const n = o.containsGlobalTarget = o.mouseDownContains || o.popperNode().contains(e.target);
      o.pendingHide = !1, requestAnimationFrame(() => {
        if (o.pendingHide = !1, !r[o.randomId] && ns(o, n, e)) {
          if (o.$_handleGlobalClose(e, t), !e.closeAllPopover && e.closePopover && n) {
            let a = o.parentPopper;
            for (; a; )
              r[a.randomId] = !0, a = a.parentPopper;
            return;
          }
          let l = o.parentPopper;
          for (; l && ns(l, l.containsGlobalTarget, e); )
            l.$_handleGlobalClose(e, t), l = l.parentPopper;
        }
      });
    } catch {
    }
  }
}
function ns(e, t, r) {
  return r.closeAllPopover || r.closePopover && t || rc(e, r) && !t;
}
function rc(e, t) {
  if (typeof e.autoHide == "function") {
    const r = e.autoHide(t);
    return e.lastAutoHide = r, r;
  }
  return e.autoHide;
}
function sc() {
  for (let e = 0; e < de.length; e++)
    de[e].$_computePosition();
}
let Ce = 0, _e = 0, lt = 0, it = 0;
typeof window < "u" && window.addEventListener("mousemove", (e) => {
  Ce = lt, _e = it, lt = e.clientX, it = e.clientY;
}, pt ? {
  passive: !0
} : void 0);
function wt(e, t, r, s, o, n, l, a) {
  const i = ((l - o) * (t - n) - (a - n) * (e - o)) / ((a - n) * (r - e) - (l - o) * (s - t)), d = ((r - e) * (t - n) - (s - t) * (e - o)) / ((a - n) * (r - e) - (l - o) * (s - t));
  return i >= 0 && i <= 1 && d >= 0 && d <= 1;
}
const oc = {
  extends: Ks()
}, br = (e, t) => {
  const r = e.__vccOpts || e;
  for (const [s, o] of t)
    r[s] = o;
  return r;
};
function nc(e, t, r, s, o, n) {
  return p(), b("div", {
    ref: "reference",
    class: C(["v-popper", {
      "v-popper--shown": e.slotData.isShown
    }])
  }, [
    k(e.$slots, "default", Ae(ds(e.slotData)))
  ], 2);
}
const ac = /* @__PURE__ */ br(oc, [["render", nc]]);
function lc() {
  var e = window.navigator.userAgent, t = e.indexOf("MSIE ");
  if (t > 0)
    return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
  var r = e.indexOf("Trident/");
  if (r > 0) {
    var s = e.indexOf("rv:");
    return parseInt(e.substring(s + 3, e.indexOf(".", s)), 10);
  }
  var o = e.indexOf("Edge/");
  return o > 0 ? parseInt(e.substring(o + 5, e.indexOf(".", o)), 10) : -1;
}
let kt;
function rr() {
  rr.init || (rr.init = !0, kt = lc() !== -1);
}
var Vt = {
  name: "ResizeObserver",
  props: {
    emitOnMount: {
      type: Boolean,
      default: !1
    },
    ignoreWidth: {
      type: Boolean,
      default: !1
    },
    ignoreHeight: {
      type: Boolean,
      default: !1
    }
  },
  emits: [
    "notify"
  ],
  mounted() {
    rr(), Ft(() => {
      this._w = this.$el.offsetWidth, this._h = this.$el.offsetHeight, this.emitOnMount && this.emitSize();
    });
    const e = document.createElement("object");
    this._resizeObject = e, e.setAttribute("aria-hidden", "true"), e.setAttribute("tabindex", -1), e.onload = this.addResizeHandlers, e.type = "text/html", kt && this.$el.appendChild(e), e.data = "about:blank", kt || this.$el.appendChild(e);
  },
  beforeUnmount() {
    this.removeResizeHandlers();
  },
  methods: {
    compareAndNotify() {
      (!this.ignoreWidth && this._w !== this.$el.offsetWidth || !this.ignoreHeight && this._h !== this.$el.offsetHeight) && (this._w = this.$el.offsetWidth, this._h = this.$el.offsetHeight, this.emitSize());
    },
    emitSize() {
      this.$emit("notify", {
        width: this._w,
        height: this._h
      });
    },
    addResizeHandlers() {
      this._resizeObject.contentDocument.defaultView.addEventListener("resize", this.compareAndNotify), this.compareAndNotify();
    },
    removeResizeHandlers() {
      this._resizeObject && this._resizeObject.onload && (!kt && this._resizeObject.contentDocument && this._resizeObject.contentDocument.defaultView.removeEventListener("resize", this.compareAndNotify), this.$el.removeChild(this._resizeObject), this._resizeObject.onload = null, this._resizeObject = null);
    }
  }
};
const ic = /* @__PURE__ */ po("data-v-b329ee4c");
co("data-v-b329ee4c");
const dc = {
  class: "resize-observer",
  tabindex: "-1"
};
fo();
const uc = /* @__PURE__ */ ic((e, t, r, s, o, n) => (p(), W("div", dc)));
Vt.render = uc;
Vt.__scopeId = "data-v-b329ee4c";
Vt.__file = "src/components/ResizeObserver.vue";
const Js = (e = "theme") => ({
  computed: {
    themeClass() {
      return Qu(this[e]);
    }
  }
}), cc = S({
  name: "VPopperContent",
  components: {
    ResizeObserver: Vt
  },
  mixins: [
    Js()
  ],
  props: {
    popperId: String,
    theme: String,
    shown: Boolean,
    mounted: Boolean,
    skipTransition: Boolean,
    autoHide: Boolean,
    handleResize: Boolean,
    classes: Object,
    result: Object
  },
  emits: [
    "hide",
    "resize"
  ],
  methods: {
    toPx(e) {
      return e != null && !isNaN(e) ? `${e}px` : null;
    }
  }
}), fc = ["id", "aria-hidden", "tabindex", "data-popper-placement"], pc = {
  ref: "inner",
  class: "v-popper__inner"
}, gc = /* @__PURE__ */ m("div", { class: "v-popper__arrow-outer" }, null, -1), hc = /* @__PURE__ */ m("div", { class: "v-popper__arrow-inner" }, null, -1), mc = [
  gc,
  hc
];
function bc(e, t, r, s, o, n) {
  const l = ye("ResizeObserver");
  return p(), b("div", {
    id: e.popperId,
    ref: "popover",
    class: C(["v-popper__popper", [
      e.themeClass,
      e.classes.popperClass,
      {
        "v-popper__popper--shown": e.shown,
        "v-popper__popper--hidden": !e.shown,
        "v-popper__popper--show-from": e.classes.showFrom,
        "v-popper__popper--show-to": e.classes.showTo,
        "v-popper__popper--hide-from": e.classes.hideFrom,
        "v-popper__popper--hide-to": e.classes.hideTo,
        "v-popper__popper--skip-transition": e.skipTransition,
        "v-popper__popper--arrow-overflow": e.result && e.result.arrow.overflow,
        "v-popper__popper--no-positioning": !e.result
      }
    ]]),
    style: st(e.result ? {
      position: e.result.strategy,
      transform: `translate3d(${Math.round(e.result.x)}px,${Math.round(e.result.y)}px,0)`
    } : void 0),
    "aria-hidden": e.shown ? "false" : "true",
    tabindex: e.autoHide ? 0 : void 0,
    "data-popper-placement": e.result ? e.result.placement : void 0,
    onKeyup: t[2] || (t[2] = is((a) => e.autoHide && e.$emit("hide"), ["esc"]))
  }, [
    m("div", {
      class: "v-popper__backdrop",
      onClick: t[0] || (t[0] = (a) => e.autoHide && e.$emit("hide"))
    }),
    m("div", {
      class: "v-popper__wrapper",
      style: st(e.result ? {
        transformOrigin: e.result.transformOrigin
      } : void 0)
    }, [
      m("div", pc, [
        e.mounted ? (p(), b(K, { key: 0 }, [
          m("div", null, [
            k(e.$slots, "default")
          ]),
          e.handleResize ? (p(), W(l, {
            key: 0,
            onNotify: t[1] || (t[1] = (a) => e.$emit("resize", a))
          })) : z("", !0)
        ], 64)) : z("", !0)
      ], 512),
      m("div", {
        ref: "arrow",
        class: "v-popper__arrow-container",
        style: st(e.result ? {
          left: e.toPx(e.result.arrow.x),
          top: e.toPx(e.result.arrow.y)
        } : void 0)
      }, mc, 4)
    ], 4)
  ], 46, fc);
}
const Xs = /* @__PURE__ */ br(cc, [["render", bc]]), Zs = {
  methods: {
    show(...e) {
      return this.$refs.popper.show(...e);
    },
    hide(...e) {
      return this.$refs.popper.hide(...e);
    },
    dispose(...e) {
      return this.$refs.popper.dispose(...e);
    },
    onResize(...e) {
      return this.$refs.popper.onResize(...e);
    }
  }
};
let sr = function() {
};
typeof window < "u" && (sr = window.Element);
const vc = S({
  name: "VPopperWrapper",
  components: {
    Popper: ac,
    PopperContent: Xs
  },
  mixins: [
    Zs,
    Js("finalTheme")
  ],
  props: {
    theme: {
      type: String,
      default: null
    },
    referenceNode: {
      type: Function,
      default: null
    },
    shown: {
      type: Boolean,
      default: !1
    },
    showGroup: {
      type: String,
      default: null
    },
    // eslint-disable-next-line vue/require-prop-types
    ariaId: {
      default: null
    },
    disabled: {
      type: Boolean,
      default: void 0
    },
    positioningDisabled: {
      type: Boolean,
      default: void 0
    },
    placement: {
      type: String,
      default: void 0
    },
    delay: {
      type: [String, Number, Object],
      default: void 0
    },
    distance: {
      type: [Number, String],
      default: void 0
    },
    skidding: {
      type: [Number, String],
      default: void 0
    },
    triggers: {
      type: Array,
      default: void 0
    },
    showTriggers: {
      type: [Array, Function],
      default: void 0
    },
    hideTriggers: {
      type: [Array, Function],
      default: void 0
    },
    popperTriggers: {
      type: Array,
      default: void 0
    },
    popperShowTriggers: {
      type: [Array, Function],
      default: void 0
    },
    popperHideTriggers: {
      type: [Array, Function],
      default: void 0
    },
    container: {
      type: [String, Object, sr, Boolean],
      default: void 0
    },
    boundary: {
      type: [String, sr],
      default: void 0
    },
    strategy: {
      type: String,
      default: void 0
    },
    autoHide: {
      type: [Boolean, Function],
      default: void 0
    },
    handleResize: {
      type: Boolean,
      default: void 0
    },
    instantMove: {
      type: Boolean,
      default: void 0
    },
    eagerMount: {
      type: Boolean,
      default: void 0
    },
    popperClass: {
      type: [String, Array, Object],
      default: void 0
    },
    computeTransformOrigin: {
      type: Boolean,
      default: void 0
    },
    /**
     * @deprecated
     */
    autoMinSize: {
      type: Boolean,
      default: void 0
    },
    autoSize: {
      type: [Boolean, String],
      default: void 0
    },
    /**
     * @deprecated
     */
    autoMaxSize: {
      type: Boolean,
      default: void 0
    },
    autoBoundaryMaxSize: {
      type: Boolean,
      default: void 0
    },
    preventOverflow: {
      type: Boolean,
      default: void 0
    },
    overflowPadding: {
      type: [Number, String],
      default: void 0
    },
    arrowPadding: {
      type: [Number, String],
      default: void 0
    },
    arrowOverflow: {
      type: Boolean,
      default: void 0
    },
    flip: {
      type: Boolean,
      default: void 0
    },
    shift: {
      type: Boolean,
      default: void 0
    },
    shiftCrossAxis: {
      type: Boolean,
      default: void 0
    },
    noAutoFocus: {
      type: Boolean,
      default: void 0
    },
    disposeTimeout: {
      type: Number,
      default: void 0
    }
  },
  emits: {
    show: () => !0,
    hide: () => !0,
    "update:shown": (e) => !0,
    "apply-show": () => !0,
    "apply-hide": () => !0,
    "close-group": () => !0,
    "close-directive": () => !0,
    "auto-hide": () => !0,
    resize: () => !0
  },
  computed: {
    finalTheme() {
      return this.theme ?? this.$options.vPopperTheme;
    }
  },
  methods: {
    getTargetNodes() {
      return Array.from(this.$el.children).filter((e) => e !== this.$refs.popperContent.$el);
    }
  }
});
function yc(e, t, r, s, o, n) {
  const l = ye("PopperContent"), a = ye("Popper");
  return p(), W(a, te({ ref: "popper" }, e.$props, {
    theme: e.finalTheme,
    "target-nodes": e.getTargetNodes,
    "popper-node": () => e.$refs.popperContent.$el,
    class: [
      e.themeClass
    ],
    onShow: t[0] || (t[0] = () => e.$emit("show")),
    onHide: t[1] || (t[1] = () => e.$emit("hide")),
    "onUpdate:shown": t[2] || (t[2] = (i) => e.$emit("update:shown", i)),
    onApplyShow: t[3] || (t[3] = () => e.$emit("apply-show")),
    onApplyHide: t[4] || (t[4] = () => e.$emit("apply-hide")),
    onCloseGroup: t[5] || (t[5] = () => e.$emit("close-group")),
    onCloseDirective: t[6] || (t[6] = () => e.$emit("close-directive")),
    onAutoHide: t[7] || (t[7] = () => e.$emit("auto-hide")),
    onResize: t[8] || (t[8] = () => e.$emit("resize"))
  }), {
    default: D(({
      popperId: i,
      isShown: d,
      shouldMountContent: u,
      skipTransition: h,
      autoHide: y,
      show: f,
      hide: g,
      handleResize: v,
      onResize: w,
      classes: $,
      result: T
    }) => [
      k(e.$slots, "default", {
        shown: d,
        show: f,
        hide: g
      }),
      Ie(l, {
        ref: "popperContent",
        "popper-id": i,
        theme: e.finalTheme,
        shown: d,
        mounted: u,
        "skip-transition": h,
        "auto-hide": y,
        "handle-resize": v,
        classes: $,
        result: T,
        onHide: g,
        onResize: w
      }, {
        default: D(() => [
          k(e.$slots, "popper", {
            shown: d,
            hide: g
          })
        ]),
        _: 2
      }, 1032, ["popper-id", "theme", "shown", "mounted", "skip-transition", "auto-hide", "handle-resize", "classes", "result", "onHide", "onResize"])
    ]),
    _: 3
  }, 16, ["theme", "target-nodes", "popper-node", "class"]);
}
const vr = /* @__PURE__ */ br(vc, [["render", yc]]);
({
  ...vr
});
({
  ...vr
});
const wc = {
  ...vr,
  name: "VTooltip",
  vPopperTheme: "tooltip"
};
S({
  name: "VTooltipDirective",
  components: {
    Popper: Ks(),
    PopperContent: Xs
  },
  mixins: [
    Zs
  ],
  inheritAttrs: !1,
  props: {
    theme: {
      type: String,
      default: "tooltip"
    },
    html: {
      type: Boolean,
      default: (e) => er(e.theme, "html")
    },
    content: {
      type: [String, Number, Function],
      default: null
    },
    loadingContent: {
      type: String,
      default: (e) => er(e.theme, "loadingContent")
    },
    targetNodes: {
      type: Function,
      required: !0
    }
  },
  data() {
    return {
      asyncContent: null
    };
  },
  computed: {
    isContentAsync() {
      return typeof this.content == "function";
    },
    loading() {
      return this.isContentAsync && this.asyncContent == null;
    },
    finalContent() {
      return this.isContentAsync ? this.loading ? this.loadingContent : this.asyncContent : this.content;
    }
  },
  watch: {
    content: {
      handler() {
        this.fetchContent(!0);
      },
      immediate: !0
    },
    async finalContent() {
      await this.$nextTick(), this.$refs.popper.onResize();
    }
  },
  created() {
    this.$_fetchId = 0;
  },
  methods: {
    fetchContent(e) {
      if (typeof this.content == "function" && this.$_isShown && (e || !this.$_loading && this.asyncContent == null)) {
        this.asyncContent = null, this.$_loading = !0;
        const t = ++this.$_fetchId, r = this.content(this);
        r.then ? r.then((s) => this.onResult(t, s)) : this.onResult(t, r);
      }
    },
    onResult(e, t) {
      e === this.$_fetchId && (this.$_loading = !1, this.asyncContent = t);
    },
    onShow() {
      this.$_isShown = !0, this.fetchContent();
    },
    onHide() {
      this.$_isShown = !1;
    }
  }
});
const xc = wc, kc = { class: "fwb-tooltip flex items-start" }, Wp = /* @__PURE__ */ S({
  __name: "FwbTooltip",
  props: {
    placement: { default: "top" },
    theme: { default: "dark" },
    trigger: { default: "hover" }
  },
  setup(e) {
    const t = e, r = c(() => ({
      light: "tooltip-light",
      dark: "tooltip-dark"
    })[t.theme]);
    return (s, o) => (p(), b("div", kc, [
      Ie(x(xc), {
        placement: s.placement,
        triggers: [s.trigger],
        theme: r.value,
        "auto-hide": ""
      }, {
        popper: D(() => [
          k(s.$slots, "content")
        ]),
        default: D(() => [
          k(s.$slots, "trigger")
        ]),
        _: 3
      }, 8, ["placement", "triggers", "theme"])
    ]));
  }
}), Cc = "block text-sm font-medium text-gray-900 dark:text-gray-300", _c = "w-4 h-4 rounded bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-600 dark:border-gray-500";
function $c() {
  const e = c(() => ve(_c)), t = c(() => Cc);
  return {
    checkboxClasses: e,
    labelClasses: t
  };
}
const Sc = { class: "flex items-center justify-start gap-3" }, Tc = ["disabled"], Gp = /* @__PURE__ */ S({
  __name: "FwbCheckbox",
  props: {
    disabled: { type: Boolean, default: !1 },
    label: { default: "" },
    modelValue: { type: Boolean, default: !1 }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c({
      get() {
        return r.modelValue;
      },
      set(a) {
        s("update:modelValue", a);
      }
    }), {
      checkboxClasses: n,
      labelClasses: l
    } = $c();
    return (a, i) => (p(), b("label", Sc, [
      Fe(m("input", {
        "onUpdate:modelValue": i[0] || (i[0] = (d) => o.value = d),
        class: C(x(n)),
        disabled: a.disabled,
        type: "checkbox"
      }, null, 10, Tc), [
        [us, o.value]
      ]),
      a.label ? (p(), b("span", {
        key: 0,
        class: C(x(l))
      }, O(a.label), 3)) : z("", !0),
      k(a.$slots, "default")
    ]));
  }
}), zc = "block w-full text-sm text-gray-900 border-[1px] border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400", Pc = "block mb-2 text-sm font-medium text-gray-900 dark:text-white", Ac = "flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600", Fc = "flex flex-col items-center justify-center pt-5 pb-6", Bc = "!-mb-2 text-sm text-gray-500 dark:text-gray-400";
function Mc(e) {
  const t = c(() => ve(
    zc,
    "text-" + e
  )), r = c(() => Pc), s = c(() => Ac), o = c(() => Fc), n = c(() => Bc);
  return {
    fileInpClasses: t,
    labelClasses: r,
    dropzoneLabelClasses: s,
    dropzoneWrapClasses: o,
    dropzoneTextClasses: n
  };
}
const Ic = { key: 0 }, Oc = ["multiple", "accept"], Lc = { key: 0 }, Ec = { key: 1 }, Rc = ["multiple", "accept"], qp = /* @__PURE__ */ S({
  __name: "FwbFileInput",
  props: {
    dropzone: { type: Boolean, default: !1 },
    label: { default: "" },
    modelValue: { default: null },
    multiple: { type: Boolean, default: !1 },
    size: { default: "sm" },
    accept: { default: "" }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = c(() => Je(r.modelValue) ? r.modelValue.map((g) => g.name).join(", ") : r.modelValue instanceof FileList ? Array.from(r.modelValue).map((g) => g.name).join(",") : r.modelValue instanceof File && r.modelValue.name || ""), o = t, n = c({
      get() {
        return r.modelValue;
      },
      set(g) {
        o("update:modelValue", g);
      }
    }), l = (g) => {
      const v = g.target;
      r.multiple ? n.value = Array.from(v.files ?? []) : n.value = v.files?.[0] ?? null;
    }, a = (g) => {
      g.preventDefault();
      const v = [];
      g.dataTransfer?.items ? (Object.values(g.dataTransfer.items).forEach((w) => {
        w.kind === "file" && v.push(w.getAsFile());
      }), r.multiple ? n.value = v : n.value = v[0]) : g.dataTransfer?.files && Object.values(g.dataTransfer.files).forEach((w) => {
        n.value = w;
      });
    }, i = (g) => {
      g.preventDefault();
    }, {
      fileInpClasses: d,
      labelClasses: u,
      dropzoneLabelClasses: h,
      dropzoneWrapClasses: y,
      dropzoneTextClasses: f
    } = Mc(r.size);
    return (g, v) => (p(), b("div", null, [
      g.dropzone ? (p(), b("div", {
        key: 1,
        class: "flex items-center justify-center",
        onChange: l,
        onDragover: i,
        onDrop: a
      }, [
        m("label", {
          class: C(x(h))
        }, [
          m("div", {
            class: C(x(y))
          }, [
            v[1] || (v[1] = m("svg", {
              "aria-hidden": "true",
              class: "size-8 text-gray-500 dark:text-gray-400",
              fill: "none",
              viewBox: "0 0 20 16",
              xmlns: "http://www.w3.org/2000/svg"
            }, [
              m("path", {
                d: "M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": "2",
                stroke: "currentColor"
              })
            ], -1)),
            n.value ? (p(), b("p", Ec, "File: " + O(s.value), 1)) : (p(), b("div", Lc, [
              m("p", {
                class: C(x(f))
              }, v[0] || (v[0] = [
                m("span", { class: "font-semibold" }, "Click to upload", -1),
                ne(" or drag and drop ")
              ]), 2),
              k(g.$slots, "default")
            ]))
          ], 2),
          m("input", {
            multiple: g.multiple,
            type: "file",
            accept: g.accept,
            class: "hidden"
          }, null, 8, Rc)
        ], 2)
      ], 32)) : (p(), b("div", Ic, [
        m("label", null, [
          m("span", {
            class: C(x(u))
          }, O(g.label), 3),
          m("input", {
            class: C(x(d)),
            multiple: g.multiple,
            type: "file",
            accept: g.accept,
            onChange: l
          }, null, 42, Oc)
        ]),
        k(g.$slots, "default")
      ]))
    ]));
  }
}), Ge = {
  Success: "success",
  Error: "error"
}, Nc = "block mb-2 text-sm font-medium", jc = "block flex-grow w-full p-0 bg-transparent text-inherit ring-offset-0 ring-0 border-0 focus:ring-offset-0 focus:ring-0 focus:border-0", Vc = "has-[input:focus]:ring-offset-0 has-[input:focus]:ring-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg has-[input:focus]:ring-blue-500 has-[input:focus]:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:has-[input:focus]:ring-blue-500 dark:has-[input:focus]:border-blue-500", Dc = "cursor-not-allowed bg-gray-100", Hc = {
  lg: "p-4",
  md: "p-2.5 text-sm",
  sm: "p-2 text-sm"
}, Wc = "bg-green-50 border-green-500 dark:border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 has-[input:focus]:ring-green-500 has-[input:focus]:border-green-500", Gc = "bg-red-50 border-red-500 text-red-900 placeholder-red-700 has-[input:focus]:ring-red-500 has-[input:focus]:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500";
function qc(e) {
  const t = c(() => {
    const o = e.validationStatus.value, n = o === Ge.Success ? Wc : o === Ge.Error ? Gc : "";
    return E(
      Vc,
      n,
      e.disabled.value ? Dc : ""
    );
  }), r = c(() => E(jc, Hc[e.size.value])), s = c(() => {
    const o = e.validationStatus.value, n = o === Ge.Success ? "text-green-700 dark:text-green-500" : o === Ge.Error ? "text-red-700 dark:text-red-500" : "text-gray-900 dark:text-white";
    return E(Nc, n);
  });
  return {
    inputBlockClasses: t,
    inputClasses: r,
    labelClasses: s
  };
}
const Uc = {
  key: 0,
  class: "ms-2 flex shrink-0 items-center"
}, Yc = ["disabled", "type", "required", "autocomplete"], Kc = {
  key: 1,
  class: "me-2 flex shrink-0 items-center"
}, Jc = {
  key: 2,
  class: "mt-2 text-sm text-gray-500 dark:text-gray-400"
}, Up = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbInput",
  props: {
    disabled: { type: Boolean, default: !1 },
    label: { default: "" },
    modelValue: { default: "" },
    required: { type: Boolean, default: !1 },
    size: { default: "md" },
    type: { default: "text" },
    autocomplete: { default: "off" },
    validationStatus: { default: void 0 },
    blockClasses: { default: void 0 }
  },
  setup(e) {
    const t = e, r = Cs(t, "modelValue"), { inputClasses: s, inputBlockClasses: o, labelClasses: n } = qc(J(t)), l = c(() => E(
      "mt-2 text-sm",
      t.validationStatus === Ge.Success ? "text-green-600 dark:text-green-500" : "",
      t.validationStatus === Ge.Error ? "text-red-600 dark:text-red-500" : ""
    ));
    return (a, i) => (p(), b("div", {
      class: C(a.blockClasses)
    }, [
      a.label ? (p(), b("label", {
        key: 0,
        class: C(x(n))
      }, O(a.label), 3)) : z("", !0),
      m("div", {
        class: C(["relative flex items-center", [x(o)]])
      }, [
        a.$slots.prefix ? (p(), b("div", Uc, [
          k(a.$slots, "prefix")
        ])) : z("", !0),
        Fe(m("input", te(a.$attrs, {
          "onUpdate:modelValue": i[0] || (i[0] = (d) => or(r) ? r.value = d : null),
          disabled: a.disabled,
          type: a.type,
          required: a.required,
          autocomplete: a.autocomplete,
          class: [x(s)]
        }), null, 16, Yc), [
          [go, x(r)]
        ]),
        a.$slots.suffix ? (p(), b("div", Kc, [
          k(a.$slots, "suffix")
        ])) : z("", !0)
      ], 2),
      a.$slots.validationMessage ? (p(), b("p", {
        key: 1,
        class: C(l.value)
      }, [
        k(a.$slots, "validationMessage")
      ], 2)) : z("", !0),
      a.$slots.helper ? (p(), b("p", Jc, [
        k(a.$slots, "helper")
      ])) : z("", !0)
    ], 2));
  }
}), Xc = { class: "flex w-full items-center" }, Zc = ["disabled", "name", "value"], Qc = "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600", ef = "m-2 mr-0 text-sm font-medium text-gray-900 dark:text-gray-300", Yp = /* @__PURE__ */ S({
  __name: "FwbRadio",
  props: {
    modelValue: { default: "" },
    name: { default: "" },
    value: { default: "" },
    label: { default: "" },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c({
      get() {
        return r.modelValue;
      },
      set(a) {
        s("update:modelValue", a);
      }
    }), n = c(() => Qc), l = c(() => E(ef, r.disabled && "text-gray-400 dark:text-gray-500"));
    return (a, i) => (p(), b("label", Xc, [
      Fe(m("input", {
        "onUpdate:modelValue": i[0] || (i[0] = (d) => o.value = d),
        type: "radio",
        disabled: a.disabled,
        name: a.name,
        value: a.value,
        class: C(n.value)
      }, null, 10, Zc), [
        [ho, o.value]
      ]),
      m("span", {
        class: C(l.value)
      }, O(a.label), 3),
      k(a.$slots, "default")
    ]));
  }
}), tf = "w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700", rf = "block mb-2 text-sm font-medium text-gray-900 dark:text-white", sf = {
  lg: "h-3 range-lg",
  md: "h-2 range-md",
  sm: "h-1 range-sm"
};
function of(e) {
  const t = c(() => ve(
    tf,
    sf[e.size.value]
  )), r = c(() => rf);
  return {
    rangeClasses: t,
    labelClasses: r
  };
}
const nf = { class: "flex flex-col" }, af = ["step", "min", "max", "disabled"], lf = /* @__PURE__ */ S({
  __name: "FwbRange",
  props: {
    disabled: { type: Boolean, default: !1 },
    label: { default: "Range slider" },
    max: { default: 100 },
    min: { default: 0 },
    modelValue: { default: 50 },
    size: { default: "md" },
    steps: { default: 1 }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c({
      get() {
        return r.modelValue;
      },
      set(a) {
        s("update:modelValue", a);
      }
    }), { rangeClasses: n, labelClasses: l } = of(J(r));
    return (a, i) => (p(), b("label", nf, [
      m("span", {
        class: C(x(l))
      }, O(a.label), 3),
      Fe(m("input", {
        "onUpdate:modelValue": i[0] || (i[0] = (d) => o.value = d),
        step: a.steps,
        min: a.min,
        max: a.max,
        disabled: a.disabled,
        type: "range",
        class: C(x(n))
      }, null, 10, af), [
        [cs, o.value]
      ])
    ]));
  }
}), Kp = /* @__PURE__ */ we(lf, [["__scopeId", "data-v-7de68dc3"]]), $e = {
  Success: "success",
  Error: "error"
}, df = "block mb-2 text-sm font-medium", uf = "w-full text-gray-900 bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500", cf = "cursor-not-allowed bg-gray-100", ff = "bg-transparent dark:bg-transparent dark:text-gray-500 border-b-2 border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer", pf = {
  lg: "p-4",
  md: "p-2.5 text-sm",
  sm: "p-2 text-sm"
}, gf = "bg-green-50 border-green-500 dark:border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 focus:ring-green-500 focus:border-green-500", hf = "bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500";
function mf(e) {
  const t = c(() => {
    const s = e.validationStatus.value, o = s === $e.Success ? gf : s === $e.Error ? hf : "", n = s === $e.Success ? "focus:border-green-500" : s === $e.Error ? "focus:border-red-500" : "";
    return E(
      uf,
      o,
      pf[e.size.value],
      e.disabled.value && cf,
      e.underline.value ? ff : "border border-gray-300 rounded-lg",
      e.underline.value && n
    );
  }), r = c(() => {
    const s = e.validationStatus.value, o = s === $e.Success ? "text-green-700 dark:text-green-500" : s === $e.Error ? "text-red-700 dark:text-red-500" : "text-gray-900 dark:text-white";
    return E(df, o);
  });
  return {
    selectClasses: t,
    labelClasses: r
  };
}
const bf = ["disabled", "required", "autocomplete"], vf = {
  disabled: "",
  selected: "",
  value: ""
}, yf = ["value"], wf = {
  key: 1,
  class: "mt-2 text-sm text-gray-500 dark:text-gray-400"
}, Jp = /* @__PURE__ */ S({
  __name: "FwbSelect",
  props: {
    modelValue: { default: "" },
    label: { default: "" },
    options: { default: () => [] },
    placeholder: { default: "Please select one" },
    disabled: { type: Boolean, default: !1 },
    required: { type: Boolean, default: !1 },
    underline: { type: Boolean, default: !1 },
    size: { default: "md" },
    autocomplete: { default: "off" },
    validationStatus: { default: void 0 }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, o = Cs(r, "modelValue", t), { selectClasses: n, labelClasses: l } = mf(J(r)), a = c(() => E(
      "mt-2 text-sm",
      r.validationStatus === $e.Success ? "text-green-600 dark:text-green-500" : "",
      r.validationStatus === $e.Error ? "text-red-600 dark:text-red-500" : ""
    ));
    return (i, d) => (p(), b("div", null, [
      m("label", null, [
        i.label ? (p(), b("span", {
          key: 0,
          class: C(x(l))
        }, O(i.label), 3)) : z("", !0),
        Fe(m("select", {
          "onUpdate:modelValue": d[0] || (d[0] = (u) => or(o) ? o.value = u : null),
          disabled: i.disabled,
          required: i.required,
          class: C(x(n)),
          autocomplete: i.autocomplete
        }, [
          m("option", vf, O(i.placeholder), 1),
          (p(!0), b(K, null, Ee(i.options, (u, h) => (p(), b("option", {
            key: h,
            value: u.value
          }, O(u.name), 9, yf))), 128))
        ], 10, bf), [
          [mo, x(o)]
        ])
      ]),
      i.$slots.validationMessage ? (p(), b("p", {
        key: 0,
        class: C(a.value)
      }, [
        k(i.$slots, "validationMessage")
      ], 2)) : z("", !0),
      i.$slots.helper ? (p(), b("p", wf, [
        k(i.$slots, "helper")
      ])) : z("", !0)
    ]));
  }
}), xf = "block w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600", kf = "block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-200 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disabled:cursor-not-allowed disabled:opacity-50", Cf = "block mb-2 text-sm font-medium text-gray-900 dark:text-white", _f = "block py-2 px-3 border-gray-200 dark:border-gray-600";
function $f(e) {
  const t = c(() => ve(
    kf,
    e ? "bg-white dark:bg-gray-800 border-none" : "border"
  )), r = c(() => Cf), s = c(() => e ? xf : ""), o = c(() => _f);
  return {
    textareaClasses: t,
    labelClasses: r,
    wrapperClasses: s,
    footerClasses: o
  };
}
const Sf = ["rows", "placeholder", "autocomplete"], Xp = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbTextarea",
  props: {
    modelValue: { default: "" },
    label: { default: "Your message" },
    rows: { default: 4 },
    custom: { type: Boolean, default: !1 },
    placeholder: { default: "Write your message here..." },
    autocomplete: { default: "off" }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c({
      get() {
        return r.modelValue;
      },
      set(d) {
        s("update:modelValue", d);
      }
    }), { textareaClasses: n, labelClasses: l, wrapperClasses: a, footerClasses: i } = $f(r.custom);
    return (d, u) => (p(), b("label", null, [
      m("span", {
        class: C(x(l))
      }, O(d.label), 3),
      m("span", {
        class: C(x(a))
      }, [
        Fe(m("textarea", te({
          "onUpdate:modelValue": u[0] || (u[0] = (h) => o.value = h)
        }, d.$attrs, {
          class: x(n),
          rows: d.rows,
          placeholder: d.placeholder,
          autocomplete: d.autocomplete
        }), null, 16, Sf), [
          [cs, o.value]
        ]),
        d.$slots.footer ? (p(), b("span", {
          key: 0,
          class: C(x(i))
        }, [
          k(d.$slots, "footer")
        ], 2)) : z("", !0)
      ], 2)
    ]));
  }
}), Tf = "w-fit relative inline-flex items-center cursor-pointer", zf = 'relative bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[""] after:absolute after:bg-white after:border-gray-300 after:border after:rounded-full after:transition-all dark:border-gray-600 peer-checked:bg-blue-600', Pf = "text-sm font-medium text-gray-900 dark:text-gray-300", Af = {
  direct: "",
  reverse: "flex-row-reverse"
}, Ff = {
  direct: "ms-3",
  reverse: "me-3"
}, Bf = {
  lg: "w-14 h-7 after:top-0.5 after:start-[4px] after:h-6 after:w-6",
  md: "w-11 h-6 after:top-[2px] after:start-[2px] after:h-5 after:w-5",
  sm: "w-9 h-5 after:top-[2px] after:start-[2px] after:h-4 after:w-4"
}, Mf = {
  red: "peer-focus:ring-red-300 dark:peer-focus:ring-red-800 peer-checked:bg-red-600",
  green: "peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:bg-green-600",
  purple: "peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:bg-purple-600",
  yellow: "peer-focus:ring-yellow-300 dark:peer-focus:ring-yellow-800 peer-checked:bg-yellow-400",
  teal: "peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:bg-teal-600",
  orange: "peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 peer-checked:bg-orange-500"
};
function If(e) {
  const t = c(() => Tf), r = c(() => zf), s = c(() => Bf[e.size.value]), o = c(() => Mf[e.color.value]), n = c(() => Pf), l = c(() => Ff[e.reverse.value ? "reverse" : "direct"]), a = c(() => Af[e.reverse.value ? "reverse" : "direct"]);
  return {
    labelClasses: t,
    toggleSize: s,
    toggleClasses: r,
    toggleColor: o,
    toggleBallClasses: n,
    toggleBallOrder: l,
    labelOrder: a
  };
}
const Of = ["disabled"], Zp = /* @__PURE__ */ S({
  __name: "FwbToggle",
  props: {
    color: { default: "" },
    disabled: { type: Boolean, default: !1 },
    label: { default: "" },
    modelValue: { type: Boolean, default: !1 },
    size: { default: "md" },
    reverse: { type: Boolean, default: !1 }
  },
  emits: ["update:modelValue"],
  setup(e, { emit: t }) {
    const r = e, s = t, o = c({
      get() {
        return r.modelValue;
      },
      set(y) {
        s("update:modelValue", y);
      }
    }), {
      labelClasses: n,
      toggleSize: l,
      toggleClasses: a,
      toggleColor: i,
      toggleBallClasses: d,
      toggleBallOrder: u,
      labelOrder: h
    } = If(J(r));
    return (y, f) => (p(), b("label", {
      class: C([x(n), x(h)])
    }, [
      Fe(m("input", {
        "onUpdate:modelValue": f[0] || (f[0] = (g) => o.value = g),
        disabled: y.disabled,
        class: "peer sr-only",
        type: "checkbox"
      }, null, 8, Of), [
        [us, o.value]
      ]),
      m("span", {
        class: C([x(a), x(l), x(i)])
      }, null, 2),
      m("span", {
        class: C([x(d), x(u)])
      }, O(y.label), 3)
    ], 2));
  }
}), Lf = ["href"], Qp = /* @__PURE__ */ S({
  __name: "FwbA",
  props: {
    href: { default: "" },
    color: { default: "text-primary-600 dark:text-primary-500" }
  },
  setup(e) {
    return (t, r) => (p(), b("a", {
      href: t.href,
      class: C([t.color, "inline-flex items-center hover:underline"])
    }, [
      k(t.$slots, "default")
    ], 10, Lf));
  }
}), e0 = /* @__PURE__ */ S({
  inheritAttrs: !1,
  __name: "FwbHeading",
  props: {
    tag: { default: "h1" },
    color: { default: "text-gray-900 dark:text-white" },
    customSize: { default: "" }
  },
  setup(e) {
    const t = e, r = {
      h1: "text-5xl font-extrabold",
      h2: "text-4xl font-bold",
      h3: "text-3xl font-bold",
      h4: "text-2xl font-bold",
      h5: "text-xl font-bold",
      h6: "text-lg font-bold"
    }, s = ie(), o = E(
      "w-full",
      r[t.tag],
      t.color,
      t.customSize,
      s.class
    ), n = t.tag;
    return (l, a) => (p(), W(re(x(n)), te(l.$attrs, { class: x(o) }), {
      default: D(() => [
        k(l.$slots, "default")
      ]),
      _: 3
    }, 16, ["class"]));
  }
}), Ef = ["src", "alt"], Rf = ["src", "alt"], t0 = /* @__PURE__ */ S({
  __name: "FwbImg",
  props: {
    caption: { default: "" },
    src: { default: "" },
    size: { default: "max-w-full" },
    alt: { default: "" },
    imgClass: { default: "h-auto" },
    alignment: { default: "" },
    captionClass: { default: "mt-2 text-sm text-center text-gray-500 dark:text-gray-400" }
  },
  setup(e) {
    return (t, r) => t.caption ? (p(), b("figure", {
      key: 0,
      class: C(t.size)
    }, [
      m("img", {
        src: t.src,
        alt: t.alt,
        class: C([t.size, t.alignment, t.imgClass])
      }, null, 10, Ef),
      m("figcaption", {
        class: C(t.captionClass)
      }, O(t.caption), 3)
    ], 2)) : (p(), b("img", {
      key: 1,
      src: t.src,
      alt: t.alt,
      class: C([t.size, t.alignment, t.imgClass])
    }, null, 10, Rf));
  }
}), Nf = "mb-3 last:mb-0 text-gray-900 dark:text-white leading-normal", r0 = /* @__PURE__ */ S({
  __name: "FwbP",
  props: {
    class: { default: "" }
  },
  setup(e) {
    const t = e, r = c(() => H([
      Nf,
      t.class
    ]));
    return (s, o) => (p(), b("p", {
      class: C(r.value)
    }, [
      k(s.$slots, "default")
    ], 2));
  }
}), jf = ["cite"], Vf = "font-semibold text-lg italic text-gray-900 dark:text-white", Df = "bg-gray-100 dark:bg-gray-800 border-l-4 border-gray-300 p-4 dark:border-gray-500", s0 = /* @__PURE__ */ S({
  __name: "FwbBlockquote",
  props: {
    type: { default: "default" },
    cite: { default: "" },
    class: { default: "" }
  },
  setup(e) {
    const t = e, r = c(() => H([
      Vf,
      t.type === "solid" ? Df : "",
      t.class
    ]));
    return (s, o) => (p(), b("blockquote", {
      class: C(r.value),
      cite: s.cite
    }, [
      k(s.$slots, "default")
    ], 10, jf));
  }
}), o0 = /* @__PURE__ */ S({
  __name: "FlowbiteThemable",
  props: {
    theme: { default: "blue" }
  },
  setup(e) {
    return ce(Is, Ct(e, "theme")), (r, s) => k(r.$slots, "default");
  }
});
function n0() {
  const e = ee(Ls, null);
  return e === null && console.warn("Cannot use useToast outside <toast-provider> component. Please wrap your component with <toast-provider>"), {
    add: (o) => e ? e?.add(o) : "",
    remove: (o) => e ? e?.remove(o) : !1,
    pop: () => e ? e?.pop() : ""
  };
}
export {
  o0 as FlowbiteThemable,
  zu as FlowbiteThemableChild,
  Qp as FwbA,
  Wf as FwbAccordion,
  Gf as FwbAccordionContent,
  qf as FwbAccordionHeader,
  Uf as FwbAccordionPanel,
  Yf as FwbAlert,
  Kf as FwbAvatar,
  Jf as FwbAvatarStack,
  Xf as FwbAvatarStackCounter,
  Zf as FwbBadge,
  s0 as FwbBlockquote,
  Qf as FwbBreadcrumb,
  ep as FwbBreadcrumbItem,
  ra as FwbButton,
  tp as FwbButtonGroup,
  rp as FwbCard,
  sp as FwbCarousel,
  Gp as FwbCheckbox,
  op as FwbDropdown,
  qp as FwbFileInput,
  np as FwbFooter,
  ap as FwbFooterBrand,
  lp as FwbFooterCopyright,
  ip as FwbFooterIcon,
  dp as FwbFooterLink,
  up as FwbFooterLinkGroup,
  e0 as FwbHeading,
  t0 as FwbImg,
  Up as FwbInput,
  cp as FwbJumbotron,
  fp as FwbListGroup,
  pp as FwbListGroupItem,
  gp as FwbModal,
  hp as FwbNavbar,
  mp as FwbNavbarCollapse,
  bp as FwbNavbarLink,
  vp as FwbNavbarLogo,
  r0 as FwbP,
  yp as FwbPagination,
  wp as FwbProgress,
  Yp as FwbRadio,
  Kp as FwbRange,
  xp as FwbRating,
  Jp as FwbSelect,
  kp as FwbSidebar,
  Cp as FwbSidebarCta,
  _p as FwbSidebarDropdownItem,
  $p as FwbSidebarItem,
  Sp as FwbSidebarItemGroup,
  Tp as FwbSidebarLogo,
  Rr as FwbSlotListener,
  bt as FwbSpinner,
  Ip as FwbTab,
  zp as FwbTable,
  Pp as FwbTableBody,
  Ap as FwbTableCell,
  Fp as FwbTableHead,
  Bp as FwbTableHeadCell,
  Mp as FwbTableRow,
  Op as FwbTabs,
  Xp as FwbTextarea,
  Lp as FwbTimeline,
  Ep as FwbTimelineBody,
  Rp as FwbTimelineContent,
  Np as FwbTimelineItem,
  jp as FwbTimelinePoint,
  Vp as FwbTimelineTime,
  Dp as FwbTimelineTitle,
  Dr as FwbToast,
  Hp as FwbToastProvider,
  Zp as FwbToggle,
  Wp as FwbTooltip,
  n0 as useToast
};
