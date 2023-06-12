function addListItem() {

    var myList = document.getElementById("myList");

    var newItem = document.createElement("li");
    var itemText = document.createTextNode("Apples");
    newItem.appendChild(itemText);

    myList.appendChild(newItem);
}
