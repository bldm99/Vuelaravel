

<template>
    <v-app>
        <div class="table-responsive">
            <table class="table table-hover table-bordered"  id="td">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>

    </v-app>


</template>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>


    import datatable  from 'datatables.net-bs4'
    export default {

        mounted() {
            this.getUser()
        },
        methods:{
            //tabla(){
                //this.$nextTick(() =>{
                    //$('#sampleTable').DataTable(); //id de la la tabla id="sampleTable"
                //});
            //},
            getUser(){
                axios.get('vuearticulo').then(res => {
                    $('#td').DataTable( {
                        data: res.data,
                        columns: [
                            { data: 'nombre' },
                            { data: 'precio' },
                            { data: 'stock' }
                        ]
                    } );
                });
            }
        }
    }

</script>
