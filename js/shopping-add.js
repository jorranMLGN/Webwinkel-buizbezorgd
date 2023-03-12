// Create a Set
const itemsAdded = [];
const total = 0;
const totalCreate = false;
function addCart(name, price) {
  const node = document.createElement("li");
  const textnode = document.createTextNode(name + " - " + price);
  node.appendChild(textnode);
  //   itemsAdded.add(price);
  //   itemsAdded.push(price);

  //   console.log(itemsAdded);
  //   itemsAdded.add(name + price);

  document.getElementById("shopCartParent").appendChild(node);

  for (const i = 0; i < itemsAdded.size; i++) {
    if (!totalCreate) {
      for (var k in itemsAdded) {
        total += itemsAdded[k];
      }
      node = document.createElement("li");
      textnode = document.createTextNode("Total: " + total);
      node.appendChild(textnode);
      document.getElementById("shopCartParent").appendChild(node);
      totalCreate = true;
    } else {
      for (var k in itemsAdded) {
        total += itemsAdded[k];
      }
      const amount = itemsAdded.size();
      node = document.createElement("li");
      textnode = document.createTextNode("Total: " + total);
      node.appendChild(textnode);
      document.getElementById("shopCartParent").replaceChild[amount](node);
    }
  }
}
