<nav>

<style>
    nav {
    
    display: flex;
    margin: 0 auto;    
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid whitesmoke;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li a {
    text-decoration: none;
    color: whitesmoke;
    padding: 20px;
}

.logo {
    width: 20px;
    height: 20px;
    background-color: whitesmoke;
}

</style>

        <div class="logo">
            
        </div>
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/users">Users</a></li>
        <!-- ovo logout dugme mi aktivira rutu iy rutera, za log out ne treba view//-->  
        <li><a href="/logout">Logout</a></li>
        <!-- ovo su rute u href-->
        </ul>
    
</nav>