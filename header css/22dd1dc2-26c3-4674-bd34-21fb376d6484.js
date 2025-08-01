/**handles:googlesitekit-events-provider-woocommerce**/
(n => {
    var o = {};

    function r(t) {
        var e;
        return (o[t] || (e = o[t] = {
            i: t,
            l: !1,
            exports: {}
        }, n[t].call(e.exports, e, e.exports, r), e.l = !0, e)).exports
    }
    r.m = n, r.c = o, r.d = function(t, e, n) {
        r.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: n
        })
    }, r.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, r.t = function(e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) r.d(n, o, function(t) {
                return e[t]
            }.bind(null, o));
        return n
    }, r.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return r.d(e, "a", e), e
    }, r.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, r.p = "", r(r.s = 10)
})({
    0: function(t, e) {
        var n, n = function() {
            return this
        }();
        try {
            n = n || new Function("return this")()
        } catch (t) {
            "object" == typeof window && (n = window)
        }
        t.exports = n
    },
    10: function(t, e, n) {
        ! function(c) {
            var l = c.jQuery,
                i = void 0,
                d, p, p, d;
            if (l) {
                let {
                    currency: a,
                    products: u,
                    purchase: r,
                    add_to_cart: n,
                    eventsToTrack: t
                } = (null == (i = c._googlesitekit) ? void 0 : i.wcdata) || {}, e = null == t ? void 0 : t.includes("add_to_cart"), o = null == t ? void 0 : t.includes("purchase");
                if (n && e) {
                    let {
                        price: t
                    } = n, e = s(t, a, n);
                    null != (d = c._googlesitekit) && null != (p = d.gtagEvent) && p.call(d, "add_to_cart", e)
                }
                if (r && o) {
                    let {
                        id: t,
                        totals: e,
                        items: n
                    } = r, o = s(e.total_price, e.currency_code, n, t, e.shipping_total, e.tax_total);
                    null != (p = c._googlesitekit) && null != (d = p.gtagEvent) && d.call(p, "purchase", o)
                }
                var i = l("body");

                function s(t, e, n, o = null, r = null, l = null) {
                    var i = {
                        value: t,
                        currency: e,
                        items: []
                    };
                    if (o && (i.transaction_id = o), "number" == typeof r && (i.shipping = r), "number" == typeof l && (i.tax = l), n && n.length)
                        for (let t of n) i.items.push(f(t));
                    else n && n.id && (i.items = [f(n)]);
                    return i
                }

                function f(t) {
                    let {
                        id: e,
                        name: n,
                        price: o,
                        variation: r,
                        quantity: l,
                        categories: i
                    } = t, a = {
                        item_id: e,
                        item_name: n,
                        price: o
                    };
                    if (l && (a.quantity = l), r && (a.item_variant = r), i && null != i && i.length) {
                        let e = 1;
                        for (let t of i) a[1 < e ? "item_category" + e : "item_category"] = t.name, e++
                    }
                    return a
                }
                e && (i.on("added_to_cart", (t, e, n, o) => {
                    var o, r, o, l, l;
                    let i = parseInt(o.data("product_id"), 10);
                    i && ({
                        price: l
                    } = o = (null == u ? void 0 : u.find(t => (null == t ? void 0 : t.id) === i)) || {}, l = s(l, a, o), null != (o = c._googlesitekit)) && null != (r = o.gtagEvent) && r.call(o, "add_to_cart", l)
                }), l(".products-block-post-template .product, .wc-block-product-template .product").each(function() {
                    let t = l(this),
                        o = parseInt(t.find("[data-product_id]").attr("data-product_id"), 10);
                    o && t.on("click", function(t) {
                        var t, e, t = l(t.target).closest(".wc-block-components-product-button [data-product_id]"),
                            t, n, n;
                        t.length && t.hasClass("add_to_cart_button") && !t.hasClass("product_type_variable") && ({
                            price: n
                        } = t = (null == u ? void 0 : u.find(t => (null == t ? void 0 : t.id) === o)) || {}, n = s(n, a, t), null != (t = c._googlesitekit)) && null != (e = t.gtagEvent) && e.call(t, "add_to_cart", n)
                    })
                }))
            }
        }.call(this, n(0))
    }
});