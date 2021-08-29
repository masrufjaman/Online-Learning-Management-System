document.getElementById('add').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'none';
        })

document.getElementById('edit').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'none';
        })