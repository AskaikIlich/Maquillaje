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
    const $form = document.getElementById("formaddPresentacion")
    // const $formId = document.getElementById("formId")
    const $divElements = document.getElementById("divElements")
    const $btnSave = document.getElementById("btnSave")
    const $btnAdd = document.getElementById("btnAdd")

    const templateElement = (data, position) => {
        return (`
            <button class="btn btn-outline-danger" onclick="removeElement(event, ${position})">Quitar</button>
            <strong>Producto N°</strong> ${$form.ID_persona.value} - cantidad ${$form.ID_tipoCita.value} - ${$form.ID_programacion.value}
        `)
    }
    $btnAdd.addEventListener("click", (event) => {
        if($form.ID_persona.value != "" && $form.ID_programacion.value != "" && $form.ID_tipoCita.value != ""){
            let index = addJsonElement({
                ID_persona:      $form.ID_persona.value,
                ID_programacion:  $form.ID_programacion.value,
                ID_tipoCita:   $form.ID_tipoCita.value
            })
            const $div = document.createElement("div")
            $div.classList.add("notification", "is-link", "is-light", "py-2", "my-1")
            $div.innerHTML = templateElement(`${$form.ID_persona.value} ${$form.ID_programacion.value} ${$form.ID_tipoCita.value}`,index)
            $divElements.insertBefore($div, $divElements.firstChild)
            // const $perso = $form.ID_persona
            // $perso.reset()
            // var $tcita = $form.ID_tipoCita
            // $tcita.reset()
            // document.getElementById("persona").reset()
            // $form.ID_tipoCita.reset()
            // $form.ID_persona.reset()
             $form.reset()

            // var sel = document.getElementById("persona");
            // sel.remove(sel.persona);
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
            url: '../controlProgramas/addPresentacion.php',
            data: {nihao:nihao},
            success:function(status){
                console.log('Enviado ' + status + '' );
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }        
        })
        // para recargar página al darle a guardar
        // setTimeout(function() {
        //     location.reload();
        //   }, 1000);
    })
})()