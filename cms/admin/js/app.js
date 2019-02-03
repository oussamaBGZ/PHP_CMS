
$(document).ready(function () {
    document.querySelectorAll('.delete').forEach(el => el.addEventListener('click', (e) => {
        console.log('clicked')
        fetch('includes/deletepost.inc.php?id=' + e.currentTarget.id, {
            method: 'delete'
        }).then(() => location.reload())

    }))

    document.querySelectorAll('.removeCat').forEach(el => el.addEventListener('click', (e) => {
        console.log('clicked')
        fetch('includes/deleteCategory.inc.php?id=' + e.currentTarget.id, {
            method: 'delete'
        }).then(() => location.reload())

    }))

});