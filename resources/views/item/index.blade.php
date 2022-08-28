@extends('layout.default')
@section('contents')
    <v-row>
        <v-col>
            <v-breadcrumbs :items="{{ $paths }}"></v-breadcrumbs>
        </v-col>
    </v-row>
    <v-row>
        <v-col>
            <v-card>
                <v-card-title>
                  科目更新
                </v-card-title>
                <v-form action="{{ route('item.update') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id" />
                    <v-card-text>
                        <v-row>
                            <v-col cols="6">
                                <v-text-field
                                    name="category"
                                    variant="outlined"
                                    label="category"
                                    placeholder="食費"
                                    value="{{ $item->category }}"
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
                                    value="{{ $item->price }}"
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
                                    value="{{ $item->purchase_date }}"
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
                                    value="{{ $item->note }}"
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
                            更新
                        </v-btn>
                    </v-card-actions>
                </v-form>
            </v-card>
        </v-col>
    </v-row>
@endsection
