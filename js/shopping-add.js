const itemsAdded = [];
let totalCreate = false;
let totalNode;
let total = 0.0;

function addCart(name, price) {
  total = 0.0;
  itemsAdded.push(parseFloat(price));

  itemsAdded.forEach(function (item) {
    total += item;
  });

  const containerDiv = document.createElement("div");
  containerDiv.setAttribute("class", "flex pr-6 p-1 relative");
  containerDiv.setAttribute("id", "containerDiv");

  // if total node already exists, update it with the new total
  if (totalCreate) {
    totalNode.textContent = "Totaal:  €" + total.toFixed(2);
  } else {
    // otherwise, create a new total node and add it to the cart
    totalNode = document.createElement("h1");
    const textNodePrice = document.createTextNode(
      "Totaal:  €" + total.toFixed(2)
    );
    totalNode.appendChild(textNodePrice);
    totalNode.setAttribute("id", "totalNode");
    document.getElementById("shopCartParent").appendChild(totalNode);
    totalCreate = true;
  }
  document.getElementById("shopCartParent").appendChild(containerDiv);

  const node = document.createElement("li");
  const textnode = document.createTextNode(name + " -  €" + price);
  node.appendChild(textnode);
  containerDiv.appendChild(node);

  const button = document.createElement("button");
  button.setAttribute(
    "class",
    "px-2 text-xs text-white bg-red-600 rounded hover:bg-red-700 absolute"
  );
  button.addEventListener("click", function () {
    const index = itemsAdded.indexOf(parseFloat(price));
    if (index > -1) {
      itemsAdded.splice(index, 1);
    }
    document.getElementById("shopCartParent").removeChild(containerDiv);

    total -= parseFloat(price);
    totalNode.textContent = "Totaal:  €" + total.toFixed(2);
    if (itemsAdded < 1) {
      total = 0.0;
      const emptyCard = document.createElement("h1");
      const textNodeEmpty = document.createTextNode("Winkelmand is leeg!");
      emptyCard.appendChild(textNodeEmpty);
      emptyCard.setAttribute("id", "emptyCard");
      document.getElementById("shopCartParent").appendChild(emptyCard);
    }
  });
  button.textContent = "X";
  containerDiv.appendChild(button);
  if (total > 0.0) {
    // if the cart is not empty, remove the empty cart message
    const emptyCard = document.getElementById("emptyCard");
    if (emptyCard) {
      document.getElementById("emptyCard").remove();
    }
  }
  // Add padding to the right side of the container div

  // Add media queries for responsive styling
  const mediaQuery = window.matchMedia("(max-width: 640px)");
  if (mediaQuery.matches) {
    containerDiv.style.flexDirection = "column";
    containerDiv.style.alignItems = "flex-start";
    containerDiv.style.justifyContent = "center";
    button.style.top = "0";
    button.style.right = "auto";
  } else {
    containerDiv.style.justifyContent = "space-between";
    button.style.right = "0";
    button.style.top = "50%";
    button.style.transform = "translateY(-50%)";
  }
}
