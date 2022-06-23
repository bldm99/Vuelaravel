<template>


    <v-app id="inspire">
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark :color="color">
                                <v-toolbar-title>{{ textolog}}</v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on }">
                                        <v-btn :href="source" icon large target="_blank" v-on="on">
                                            <v-icon large>code</v-icon>
                                        </v-btn>
                                    </template>
                                    <span>Source</span>
                                </v-tooltip>
                                <v-tooltip right>
                                    <template v-slot:activator="{ on }">
                                        <v-btn icon large href="https://codepen.io/johnjleider/pen/wyYVVj" target="_blank" v-on="on">
                                            <v-icon large>mdi-codepen</v-icon>
                                        </v-btn>
                                    </template>
                                    <span>Codepen</span>
                                </v-tooltip>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field prepend-icon="mdi-account" name="login" label="Login" type="text"></v-text-field>
                                    <v-text-field v-if="esconder" id="password" prepend-icon="mdi-lock" name="password" label="Password" type="password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn @click="ingresar()" color="primary">Login</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        textolog:'Sesion',
        color: 'amber',
        esconder:false    //no se muestra el contenido
    }),

    props: {
        source: String
    },

    methods:{
        ingresar(){
            //alert('se presiono el boton ');
            this.textolog = 'cambio';
            this.color='red';
            this.esconder=true;     //El contenido sera mostrado al pulsar un boton
        }

    }
}
</script>
