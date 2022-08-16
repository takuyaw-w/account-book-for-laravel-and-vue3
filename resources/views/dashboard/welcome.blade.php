@extends('layout.default')
@section('contents')
    <v-row>
        <v-col>
            <v-card>
                <template #title>
                  This is a title
                </template>

                <template #subtitle>
                  This is a subtitle
                </template>

                <template #text>
                  This is content
                </template>
              </v-card>
        </v-col>
    </v-row>
@endsection
