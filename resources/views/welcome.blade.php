 @extends('layouts.app')
 @section('content')
     <div class="d-flex justify-center align-center" style="height: 90vh">
         <v-card>
             <v-card-title class="headline">
                 Laravel Vuetify Preset
             </v-card-title>

             <v-card-subtitle>
                 Style your backend application with Vuetify.
                 Sprinkle JS components into your blade views.
             </v-card-subtitle>

             <v-card-actions>
                 <v-btn href="https://laravel.com" text>
                     Laravel
                 </v-btn>
                 <v-btn href="https://vuetifyjs.com" text>
                     Vuetify
                 </v-btn>
             </v-card-actions>
         </v-card>
     </div>
 @endsection
