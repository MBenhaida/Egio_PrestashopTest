var editor;
ClassicEditor.create(document.querySelector("#editor"), {
    wordCount: {
        onUpdate: stats => {
            if (stats.characters > 100) {
                var showFirstToast = new bootstrap.Toast($('#limit-reached'));
                showFirstToast.show();
                undoLastAction();
            }
        }
    }
}).then(newEditor => {
    editor = newEditor;
}).catch((error) => {
    console.error(error);
});

function submitForm(event) {
    event.preventDefault();
    if ($("#input1").val().length == 0) {
        var showThirdToast = new bootstrap.Toast($('#input-null'));
        showThirdToast.show();
        $("#input1").focus();
    } else if (editor.getData().length == 0) {
        var showSecondToast = new bootstrap.Toast($('#not-null'));
        showSecondToast.show();
        editor.focus();
    } else {
        $("#new-element-form").trigger("submit");
    }
}

function undoLastAction() {
    const undoCommand = editor.commands.get('undo');
    undoCommand.execute();
}

function showImg(target) {
    document.getElementById("icon-render").src = window.URL.createObjectURL(
        target.files[0]
    );
}

$(function () {
    if ($("html").attr("lang") == "en") {
        $("#reinsurances-table").DataTable({
            "ordering": false,
        });
    } else {
        $("#reinsurances-table").DataTable({
            "ordering": false,
            language: {
                lengthMenu: "Afficher _MENU_ résultats par page",
                zeroRecords: "Aucune correspondance trouvée",
                info: "Page _PAGE_ sur _PAGES_",
                infoEmpty: "Aucune correspondance trouvée",
                infoFiltered: "(filtré à partir d'un total de _MAX_ résultats)",
                search: "Rechercher : ",
                loadingRecords: "Chargement ...",
                processing: "Traitement ...",
                paginate: {
                    previous: "Précédent",
                    next: "Suivant",
                    first: "Début",
                    last: "Fin",
                },
                aria: {
                    sortAscending: " : Activer pour un tri croissant",
                    sortDescending: " : Activer pour un tri décroissant",
                },
            },
        });
    }
});
