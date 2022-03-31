"use strict";
var KTCustomersList = (function () {
    var t,
        e,
        o,
        n,
        c,
        r
    return {
        init: function () {
                document
                    .querySelector('[data-kt-customer-table-filter="search"]')
                    .addEventListener("keyup", function (e) {
                        t.search(e.target.value).draw();
                    }),
                (e = $('[data-kt-customer-table-filter="month"]')),
                (o = document.querySelectorAll(
                    '[data-kt-customer-table-filter="payment_type"] [name="payment_type"]'
                )),
                document
                    .querySelector('[data-kt-customer-table-filter="filter"]')
                    .addEventListener("click", function () {
                        const n = e.val();
                        let c = "";
                        o.forEach((t) => {
                            t.checked && (c = t.value), "all" === c && (c = "");
                        });
                        const r = n + " " + c;
                        t.search(r).draw();
                    }),
                c(),
                document
                    .querySelector('[data-kt-customer-table-filter="reset"]')
                    .addEventListener("click", function () {
                        e.val(null).trigger("change"),
                            (o[0].checked = !0),
                            t.search("").draw();
                    }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCustomersList.init();
});
