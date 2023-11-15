let parameters = []
function removeElement(event, position) {
    event.target.parentElement.remove()
    delete parameters[position]
}

const addJsonElement = json => {
    parameters.push(json)
    return parameters.length - 1
}

(function load(){
    const $form = document.getElementById("maEntregando")
    const $divElements = document.getElementById("divElements")
    const $btnSave = document.getElementById("btnSave")
    const $btnAdd = document.getElementById("btnAdd")

    const templateElement = (data, position) => {
        return (`
            <button class="btn btn-outline-danger" onclick="removeElement(event, ${position})">Quitar</button>
            <strong>Producto N°</strong> ${$form.IDpro.value} - cantidad ${$form.cantidad.value}
        `)
    }
    $btnAdd.addEventListener("click", (event) => {
        if($form.IDpro.value != "" && $form.IDentrega.value != "" && $form.cantidad.value != ""){
            let index = addJsonElement({
                IDpro:      $form.IDpro.value,
                IDentrega:  $form.IDentrega.value,
                cantidad:   $form.cantidad.value
            })
            const $div = document.createElement("div")
            $div.classList.add("notification", "is-link", "is-light", "py-2", "my-1")
            $div.innerHTML = templateElement(`${$form.IDpro.value} ${$form.IDentrega.value} ${$form.cantidad.value}`,index)
            $divElements.insertBefore($div, $divElements.firstChild)
            $form.reset()
        }else{
            alert("Complete los campos")
        }
    })
    $btnSave.addEventListener("click", (event) =>{
        parameters = parameters.filter(el => el != null)
        const $jsonDiv = document.getElementById("jsonDiv")
        $jsonDiv.innerHTML = `${JSON.stringify(parameters)}`
        $divElements.innerHTML = "";
        parameters = [];
        nihao = $jsonDiv.innerHTML;

        $.ajax({
            type: 'POST',
            url: 'control/maAddMaqui.php',
            data: {nihao:nihao},
            success:function(status){
                alert('Enviado ' + status + '' );
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }        
        })
        // para recargar página al darle a guardar
        setTimeout(function() {
            location.reload();
          }, 1000);
    })
})()