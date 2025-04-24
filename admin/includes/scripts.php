<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
let sidebar = document.querySelector('.sidebar');
let sidebarBtn = document.querySelector('.sidebarBtn')

sidebarBtn.onclick = function() 
{
    sidebar.classList.toggle('active');
}
</script>