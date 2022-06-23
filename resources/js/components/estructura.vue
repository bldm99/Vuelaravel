
<template>

    <v-app>
        <v-navigation-drawer app>
            <v-card
                class="mx-auto"
                width="256"
                tile
            >
                <v-navigation-drawer permanent>
                    <v-system-bar></v-system-bar>
                    <v-list>
                        <v-list-item>
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
                            </v-list-item-avatar>
                        </v-list-item>

                        <v-list-item link>
                            <v-list-item-content>
                                <v-list-item-title class="text-h6">
                                    John Leider
                                </v-list-item-title>
                                <v-list-item-subtitle>{{ perfil }}</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-action>
                                <v-icon>mdi-menu-down</v-icon>
                            </v-list-item-action>
                        </v-list-item>
                    </v-list>
                    <v-divider></v-divider>
                    <v-list
                        nav
                        dense
                    >
                        <v-list-item-group
                            v-model="selectedItem"
                            color="primary"
                        >
                            <v-list-item
                                v-for="(item, i) in items"
                                :key="i"
                            >
                                <v-list-item-icon>
                                    <v-icon v-text="item.icon"></v-icon>
                                </v-list-item-icon>

                                <v-list-item-content>
                                    <v-list-item-title v-text="item.text"></v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>
                </v-navigation-drawer>
            </v-card>

        </v-navigation-drawer>

        <v-app-bar app
                   dark
                   prominent
                   src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
        >


                    <v-app-bar-nav-icon></v-app-bar-nav-icon>

                    <v-toolbar-title>Bonita</v-toolbar-title>

                    <v-spacer></v-spacer>

                    <v-btn icon>
                        <v-icon>mdi-export</v-icon>
                    </v-btn>




        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-main>

            <!-- Provides the application the proper gutter -->
            <v-container fluid>

                <!-- If using vue-router -->
                <router-view></router-view>
            </v-container>
        </v-main>

        <v-footer app
            color="primary lighten-1"
            padless

        >
            <v-row
                justify="center"
                no-gutters
                flat
                tile
                class="black lighten-1 white--text text-center"
            >

                <v-card-text>
                    <v-btn
                        v-for="icon in icons"
                        :key="icon"
                        class="mx-4 white--text"
                        icon
                    >
                        <v-icon size="24px">
                            {{ icon }}
                        </v-icon>
                    </v-btn>
                </v-card-text>

                <v-btn
                    v-for="pa in palabras"
                    :key="pa"
                    color="white"
                    text
                    rounded
                    class="my-2"
                >
                    {{ pa }}
                </v-btn>
                <v-col
                    class="black lighten-2 py-4 text-center white--text"
                    cols="12"
                >
                    {{ new Date().getFullYear() }} — <strong>Bonita</strong>
                </v-col>
            </v-row>
        </v-footer>
    </v-app>

</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
<script>
export default {
    data: () => ({
        drawer: null,
        icons: [
            'mdi-facebook',
            'mdi-twitter',
            'mdi-linkedin',
            'mdi-instagram',
        ],

        url:'http://laramongo.test/listarprueva',


        palabras: [
            'CONTACT',
            'SHOP',
            'PIRCING',
            'PRIVACY POLICY',
        ],
        selectedItem: 0,
        items: [
            { text: 'My Files', icon: 'mdi-folder' },
            { text: 'Shared with me', icon: 'mdi-account-multiple' },
            { text: 'Starred', icon: 'mdi-star' },
            { text: 'Recent', icon: 'mdi-history' },
            { text: 'Offline', icon: 'mdi-check-circle' },
            { text: 'Uploads', icon: 'mdi-upload' },
            { text: 'Backups', icon: 'mdi-cloud-upload' },
        ],

        perfil: 'listarprueva',
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


