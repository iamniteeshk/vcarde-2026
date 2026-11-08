listenClick("#newCurrencyBtn", function () {
    $("#addCurrencyModal").modal("show");
});

listenHiddenBsModal("#addCurrencyModal", function () {
    resetModalForm("#addCurrencyForm");
});

listenSubmit("#addCurrencyForm", function (e) {
    e.preventDefault();
    let currencyUrl = route("currencies.store");
    $.ajax({
        url: currencyUrl,
        type: "POST",
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $("#addCurrencyModal").modal("hide");
                Livewire.dispatch("refresh");
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});

listenClick(".currency-edit-btn", function (event) {
    let currencyId = $(event.currentTarget).data("id");
    EditCurrencyRenderData(currencyId);
});

function EditCurrencyRenderData(id) {
    let currencyUrl = route("currencies.edit", id);
    $.ajax({
        url: currencyUrl,
        type: "GET",
        success: function (result) {
            if (result.success) {
                $("#currencyId").val(result.data.id);
                $("#editCurrencyName").val(result.data.currency_name);
                $("#editCurrencyIcon").val(result.data.currency_icon);
                $("#editCurrencyCode").val(result.data.currency_code);
                $("#editCurrencyModal").modal("show");
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
}

listenSubmit("#editCurrencyForm", function (event) {
    event.preventDefault();
    let currencyId = $("#currencyId").val();
    let currencyUrl = route("currencies.update", currencyId);
    $.ajax({
        url: currencyUrl,
        type: "put",
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $("#editCurrencyModal").modal("hide");
                Livewire.dispatch("refresh");
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});

listen("click", ".currency-delete-btn", function (event) {
    let currencyDeleteId = $(event.currentTarget).data("id");
    let url = route("currencies.destroy", { currency: currencyDeleteId });
    deleteItem(url, Lang.get("js.currency"));
});
