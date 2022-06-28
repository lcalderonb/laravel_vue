<template>
    <div>
        <!-- navbar -->
        <Navbar :ruta="ruta"></Navbar>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <Sidebar :ruta="ruta"></Sidebar>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <p>HOLA MUNDO</p>
           <!-- <router-view></router-view> -->
        </div>

        <!-- /.content-wrapper -->
        <Footer></Footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <!-- Control sidebar content goes here -->
    </div>
</template>

<script>
    import Navbar from './plantilla/Navbar'
    import Sidebar from './plantilla/Sidebar'
    import Content from './plantilla/Content'
    import Footer from './plantilla/Footer'
    export default {
        props:['ruta'],
        components: {Navbar, Sidebar, Content, Footer}
    }
</script>

<style>

</style>
