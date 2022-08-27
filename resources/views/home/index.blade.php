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
                                    type="number"
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
                    登録データ一覧
                </template>
                <v-card-actions>
                    <v-btn variant="elevated" href="{{ route("summary") }}" color="secondary" size="small">
                        集計確認
                    </v-btn>
                </v-card-actions>
                <v-card-text>
                    <expenses-table :headers="{{ $headers }}" :items="{{ collect($items->items()) }}"></expenses-table>
                </v-card-text>
                <v-card-actions>
                    {{ $items }}
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
@endsection
