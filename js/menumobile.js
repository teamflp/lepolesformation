
const bars = $('#bars');
const tabs = $('#tabs');

$(bars).click(() => {
    if (tabs.is(":hidden")) {
        $(tabs).toggle(200);
        $(tabs).addClass("animateleft");
    } else {
        $(tabs).hide(200);
    }
});
