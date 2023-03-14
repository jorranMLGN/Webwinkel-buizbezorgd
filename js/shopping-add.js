const itemsAdded = [];
let totalCreate = false;
let totalNode;

function addCart(name, price) {
  let total = 0.0;
  itemsAdded.push(parseFloat(price));

  itemsAdded.forEach(function (item) {
    total += item;
  });

  // if total node already exists, update it with the new total
  if (totalCreate) {
    totalNode.textContent = "Totaal:  €" + total.toFixed(2);
  } else {
    // otherwise, create a new total node and add it to the cart
    totalNode = document.createElement("h1");
    const textNodePrice = document.createTextNode(
      "Totaal: " + total.toFixed(2)
    );
    totalNode.appendChild(textNodePrice);
    totalNode.setAttribute("id", "totalNode");
    document.getElementById("shopCartParent").appendChild(totalNode);
    totalCreate = true;
  }

  const node = document.createElement("li");
  const textnode = document.createTextNode(name + " -  €" + price);
  node.appendChild(textnode);
  document.getElementById("shopCartParent").appendChild(node);
}
