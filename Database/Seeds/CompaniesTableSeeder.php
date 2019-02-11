<?php

namespace Raffles\Modules\Linkre\Database\Seeds;

use Raffles\Modules\Linkre\Models\Company;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'AGB S.A.',
                'slug' => 'agb-sa',
                'website' => 'http://www.agbsa.com.ar',
            ],
            [
                'name' => 'Lennar International',
                'slug' => 'lennar-international',
            ],
            [
                'name' => 'IRSA',
                'slug' => 'irsa',
            ],
            [
                'name' => 'Edisur',
                'slug' => 'edisur',
            ],
            [
                'name' => 'Stars S.A.',
                'slug' => 'stars-sa',
            ],
            [
                'name' => 'Vizora Desarrollos',
                'slug' => 'vizora-desarrollos',
            ],
            [
                'name' => 'Retco Commercial',
                'slug' => 'retco-commercial',
            ],
            [
                'name' => 'Taurus',
                'slug' => 'taurus',
            ],
            [
                'name' => 'Grupo Toyosa',
                'slug' => 'grupo-toyosa',
            ],
            [
                'name' => 'Prodigy Network',
                'slug' => 'prodigy-network',
            ],
            [
                'name' => 'Nostra Luna',
                'slug' => 'nostra-luna',
            ],
            [
                'name' => 'SELF Inmobiliaria',
                'slug' => 'self-inmobiliaria',
            ],
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}