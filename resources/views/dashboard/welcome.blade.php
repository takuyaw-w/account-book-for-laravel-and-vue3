@extends('layout.default')
@section('contents')
    <v-row>
        <v-col>
            <v-card>
                <v-card-title>
                  科目追加
                </v-card-title>
                <v-form action="{{ route('item.store') }}" method="post">
                    @csrf
                    <v-card-text>
                        <v-row>
                            <v-col cols="6">
                                <v-text-field
                                    name="category"
                                    variant="outlined"
                                    label="category"
                                    placeholder="食費"
                                    @error('category')
                                        error-messages="{{ $message }}"
                                    @enderror
                                ></v-text-field>
                            </v-col>
                            <v-col cols="6">
                                <v-text-field
                                    name="price"
                                    variant="outlined"
                                    prefix="¥"
                                    label="price"
                                    @error('price')
                                        error-messages="{{ $message }}"
                                    @enderror
                                ></v-text-field>
                            </v-col>
                            <v-col cols="6">
                                <v-text-field
                                    name="purchase_date"
                                    variant="outlined"
                                    type="date"
                                    label="purchase date"
                                    @error('purchase_date')
                                        error-messages="{{ $message }}"
                                    @enderror
                                ></v-text-field>
                            </v-col>
                            <v-col cols="6">
                                <v-text-field
                                    name="note"
                                    variant="outlined"
                                    label="note"
                                    counter="20"
                                    maxlength="20"
                                    @error('note')
                                        error-messages="{{ $message }}"
                                    @enderror
                                ></v-text-field>
                            </v-col>
                        </v-row>
                    </v-card-text>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-btn type="submit" variant="elevated" color="primary" size="large">
                            登録
                        </v-btn>
                    </v-card-actions>
                </v-form>
            </v-card>
        </v-col>
    </v-row>
    <v-row>
        <v-col>
            <v-card>
                <template #title>
                    fugaaa
                </template>
                <v-card-text>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left">Name</th>
                                <th class="text-left">Calories</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
