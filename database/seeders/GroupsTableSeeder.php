<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Group;
use Carbon\Carbon;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            [
                "id" => "33c37be26aa64007abe077269e96eee8",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Sumedang",
                "city" => "Sumedang"
            ],
            [
                "id" => "3e75c1502fee4d8994f2d8f016fada43",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Banjar",
                "city" => "Banjar"
            ],
            [
                "id" => "42bfb3c187d6446696291299b64a0e99",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Purwakarta",
                "city" => "Purwakarta"
            ],
            [
                "id" => "4c3ca7d155a24073b9d3164f70378d7f",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Kuningan",
                "city" => "Kuningan"
            ],
            [
                "id" => "7ffa5d4b7c9b44b0885dc5010e12a2f6",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Sukabumi",
                "city" => "Sukabumi"
            ],
            [
                "id" => "8616215aa58c4c8f90480549a8003100",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Kota Bekasi",
                "city" => "Kab Bekasi"
            ],
            [
                "id" => "88b92a01e6e74c59846abbcc62b681e4",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Cianjur",
                "city" => "Cianjur"
            ],
            [
                "id" => "c1d9a754dacf4d5cb3358e6e7741190b",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Ciamis",
                "city" => "Ciamis"
            ],
            [
                "id" => "caa76029de0a4e47beacf5a345eda0c4",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Kota Bogor",
                "city" => "Kota Bogor"
            ],
            [
                "id" => "ee174d1cd127452b9fb45ea28010d7ac",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "deleted_at" => null,
                "name" => "Group Cimahi",
                "city" => "Cimahi"
            ]
        ]);
    }
}
