@extends('layout.default')
@section('contents')
    <v-row>
        <v-col>
            <v-breadcrumbs
                :items="{{ $paths }}"
            ></v-breadcrumbs>
        </v-col>
    </v-row>
    <v-row>
        <v-col>
            <v-card>
                <v-card-title>
                  集計表
                </v-card-title>
                <v-card-text>
                    <expenses-table :headers="{{ $headers }}" :items="{{ $count }}"></expenses-table>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
