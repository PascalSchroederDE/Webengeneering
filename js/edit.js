// displays/hides edit form / viewing form for auctions
function edit() {
    //if edit form is not yet enabled, enable edit form and disable viewing form
    if (document.getElementById('show_main').style.display != 'none') {
        document.getElementById('edit_main').style.display = 'inline';
        document.getElementById('show_main').style.display = 'none';

    }
    //else enable viewing form and disable edit form
    else {
        document.getElementById('edit_main').style.display = 'none';
        document.getElementById('show_main').style.display = 'inline';
    }
}