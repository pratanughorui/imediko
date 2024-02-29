const placeValue = () => {

    const l_node_data = ["Neck", "Axilla", "Groin"];
    const l_node_p_data = ["Palpable", "Not Palpable"];

    const l_node = document.querySelector(".l_nodes");
    const selected_l_node = l_node.options[l_node.selectedIndex].value;
    
    const l_node_p = document.querySelector(".l_nodes_p");
    const selected_l_node_p = l_node_p.options[l_node_p.selectedIndex].value;
    
    let text_box = document.querySelector(".text_area");
    console.log(text_box);

    let x = "";
    let y = "";
    l_node_data.forEach((element) => {
      if (selected_l_node == element.toLowerCase()) {
        x = element;
      }
    });

    l_node_p_data.forEach((element) => {
      if (selected_l_node_p == element.toLowerCase()) {
        y = element;
      }
    });
    if(x.length === 0 || y.length === 0){
      text_box.innerHTML = 'Please enter valid details';
  }else{
      text_box.innerHTML = `${x} with ${y}`;
  }
  };

  let b = document.querySelector("#go");
  b.addEventListener("click", placeValue);

