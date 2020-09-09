<?php

use Illuminate\Database\Seeder;

class _CountriesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Andorra',
                'code' => 'AD',
                'iso3' => 'AND',
                'currency' => 'EUR',
                'languages' => 'ca'
            ],
            [
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'iso3' => 'ARE',
                'currency' => 'AED',
                'languages' => 'ar-AE,fa,en,hi,ur'
            ],
            [
                'name' => 'Afghanistan',
                'code' => 'AF',
                'iso3' => 'AFG',
                'currency' => 'AFN',
                'languages' => 'fa-AF,ps,uz-AF,tk'
            ],
            [
                'name' => 'Antigua and Barbuda',
                'code' => 'AG',
                'iso3' => 'ATG',
                'currency' => 'XCD',
                'languages' => 'en-AG'
            ],
            [
                'name' => 'Anguilla',
                'code' => 'AI',
                'iso3' => 'AIA',
                'currency' => 'XCD',
                'languages' => 'en-AI'
            ],
            [
                'name' => 'Albania',
                'code' => 'AL',
                'iso3' => 'ALB',
                'currency' => 'ALL',
                'languages' => 'sq,el'
            ],
            [
                'name' => 'Armenia',
                'code' => 'AM',
                'iso3' => 'ARM',
                'currency' => 'AMD',
                'languages' => 'hy'
            ],
            [
                'name' => 'Angola',
                'code' => 'AO',
                'iso3' => 'AGO',
                'currency' => 'AOA',
                'languages' => 'pt-AO'
            ],
            [
                'name' => 'Antarctica',
                'code' => 'AQ',
                'iso3' => 'ATA',
                'currency' => '',
                'languages' => ''
            ],
            [
                'name' => 'Argentina',
                'code' => 'AR',
                'iso3' => 'ARG',
                'currency' => 'ARS',
                'languages' => 'es-AR,en,it,de,fr,gn'
            ],
            [
                'name' => 'American Samoa',
                'code' => 'AS',
                'iso3' => 'ASM',
                'currency' => 'USD',
                'languages' => 'en-AS,sm,to'
            ],
            [
                'name' => 'Austria',
                'code' => 'AT',
                'iso3' => 'AUT',
                'currency' => 'EUR',
                'languages' => 'de-AT,hr,hu,sl'
            ],
            [
                'name' => 'Australia',
                'code' => 'AU',
                'iso3' => 'AUS',
                'currency' => 'AUD',
                'languages' => 'en-AU'
            ],
            [
                'name' => 'Aruba',
                'code' => 'AW',
                'iso3' => 'ABW',
                'currency' => 'AWG',
                'languages' => 'nl-AW,es,en'
            ],
            [
                'name' => 'Åland Islands',
                'code' => 'AX',
                'iso3' => 'ALA',
                'currency' => 'EUR',
                'languages' => 'sv-AX'
            ],
            [
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'iso3' => 'AZE',
                'currency' => 'AZN',
                'languages' => 'az,ru,hy'
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'iso3' => 'BIH',
                'currency' => 'BAM',
                'languages' => 'bs,hr-BA,sr-BA'
            ],
            [
                'name' => 'Barbados',
                'code' => 'BB',
                'iso3' => 'BRB',
                'currency' => 'BBD',
                'languages' => 'en-BB'
            ],
            [
                'name' => 'Bangladesh',
                'code' => 'BD',
                'iso3' => 'BGD',
                'currency' => 'BDT',
                'languages' => 'bn-BD,en'
            ],
            [
                'name' => 'Belgium',
                'code' => 'BE',
                'iso3' => 'BEL',
                'currency' => 'EUR',
                'languages' => 'nl-BE,fr-BE,de-BE'
            ],
            [
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'iso3' => 'BFA',
                'currency' => 'XOF',
                'languages' => 'fr-BF'
            ],
            [
                'name' => 'Bulgaria',
                'code' => 'BG',
                'iso3' => 'BGR',
                'currency' => 'BGN',
                'languages' => 'bg,tr-BG,rom'
            ],
            [
                'name' => 'Bahrain',
                'code' => 'BH',
                'iso3' => 'BHR',
                'currency' => 'BHD',
                'languages' => 'ar-BH,en,fa,ur'
            ],
            [
                'name' => 'Burundi',
                'code' => 'BI',
                'iso3' => 'BDI',
                'currency' => 'BIF',
                'languages' => 'fr-BI,rn'
            ],
            [
                'name' => 'Benin',
                'code' => 'BJ',
                'iso3' => 'BEN',
                'currency' => 'XOF',
                'languages' => 'fr-BJ'
            ],
            [
                'name' => 'Saint Barthélemy',
                'code' => 'BL',
                'iso3' => 'BLM',
                'currency' => 'EUR',
                'languages' => 'fr'
            ],
            [
                'name' => 'Bermuda',
                'code' => 'BM',
                'iso3' => 'BMU',
                'currency' => 'BMD',
                'languages' => 'en-BM,pt'
            ],
            [
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
                'iso3' => 'BRN',
                'currency' => 'BND',
                'languages' => 'ms-BN,en-BN'
            ],
            [
                'name' => 'Bolivia',
                'code' => 'BO',
                'iso3' => 'BOL',
                'currency' => 'BOB',
                'languages' => 'es-BO,qu,ay'
            ],
            [
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'BQ',
                'iso3' => 'BES',
                'currency' => 'USD',
                'languages' => 'nl,pap,en'
            ],
            [
                'name' => 'Brazil',
                'code' => 'BR',
                'iso3' => 'BRA',
                'currency' => 'BRL',
                'languages' => 'pt-BR,es,en,fr'
            ],
            [
                'name' => 'Bahamas',
                'code' => 'BS',
                'iso3' => 'BHS',
                'currency' => 'BSD',
                'languages' => 'en-BS'
            ],
            [
                'name' => 'Bhutan',
                'code' => 'BT',
                'iso3' => 'BTN',
                'currency' => 'BTN',
                'languages' => 'dz'
            ],
            [
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'iso3' => 'BVT',
                'currency' => 'NOK',
                'languages' => ''
            ],
            [
                'name' => 'Botswana',
                'code' => 'BW',
                'iso3' => 'BWA',
                'currency' => 'BWP',
                'languages' => 'en-BW,tn-BW'
            ],
            [
                'name' => 'Belarus',
                'code' => 'BY',
                'iso3' => 'BLR',
                'currency' => 'BYR',
                'languages' => 'be,ru'
            ],
            [
                'name' => 'Belize',
                'code' => 'BZ',
                'iso3' => 'BLZ',
                'currency' => 'BZD',
                'languages' => 'en-BZ,es'
            ],
            [
                'name' => 'Canada',
                'code' => 'CA',
                'iso3' => 'CAN',
                'currency' => 'CAD',
                'languages' => 'en-CA,fr-CA,iu'
            ],
            [
                'name' => 'Cocos [Keeling] Islands',
                'code' => 'CC',
                'iso3' => 'CCK',
                'currency' => 'AUD',
                'languages' => 'ms-CC,en'
            ],
            [
                'name' => 'Democratic Republic of the Congo',
                'code' => 'CD',
                'iso3' => 'COD',
                'currency' => 'COD',
                'languages' => 'fr-CD,ln,kg'
            ],
            [
                'name' => 'Central African Republic',
                'code' => 'CF',
                'iso3' => 'CAF',
                'currency' => 'XAF',
                'languages' => 'fr-CF,sg,ln,kg'
            ],
            [
                'name' => 'Republic of the Congo',
                'code' => 'CG',
                'iso3' => 'COG',
                'currency' => 'XAF',
                'languages' => 'fr-CG,kg,ln-CG'
            ],
            [
                'name' => 'Switzerland',
                'code' => 'CH',
                'iso3' => 'CHE',
                'currency' => 'CHF',
                'languages' => 'de-CH,fr-CH,it-CH,rm'
            ],
            [
                'name' => 'Ivory Coast',
                'code' => 'CI',
                'iso3' => 'CIV',
                'currency' => 'XOF',
                'languages' => 'fr-CI'
            ],
            [
                'name' => 'Cook Islands',
                'code' => 'CK',
                'iso3' => 'COK',
                'currency' => 'NZD',
                'languages' => 'en-CK,mi'
            ],
            [
                'name' => 'Chile',
                'code' => 'CL',
                'iso3' => 'CHL',
                'currency' => 'CLP',
                'languages' => 'es-CL'
            ],
            [
                'name' => 'Cameroon',
                'code' => 'CM',
                'iso3' => 'CMR',
                'currency' => 'XAF',
                'languages' => 'en-CM,fr-CM'
            ],
            [
                'name' => 'China',
                'code' => 'CN',
                'iso3' => 'CHN',
                'currency' => 'CNY',
                'languages' => 'zh-CN,yue,wuu,dta,ug,za'
            ],
            [
                'name' => 'Colombia',
                'code' => 'CO',
                'iso3' => 'COL',
                'currency' => 'COP',
                'languages' => 'es-CO'
            ],
            [
                'name' => 'Costa Rica',
                'code' => 'CR',
                'iso3' => 'CRI',
                'currency' => 'CRC',
                'languages' => 'es-CR,en'
            ],
            [
                'name' => 'Cuba',
                'code' => 'CU',
                'iso3' => 'CUB',
                'currency' => 'CUP',
                'languages' => 'es-CU'
            ],
            [
                'name' => 'Cape Verde',
                'code' => 'CV',
                'iso3' => 'CPV',
                'currency' => 'CVE',
                'languages' => 'pt-CV'
            ],
            [
                'name' => 'Curaçao',
                'code' => 'CW',
                'iso3' => 'CUW',
                'currency' => 'ANG',
                'languages' => 'nl,pap'
            ],
            [
                'name' => 'Christmas Island',
                'code' => 'CX',
                'iso3' => 'CXR',
                'currency' => 'AUD',
                'languages' => 'en,zh,ms-CC'
            ],
            [
                'name' => 'Cyprus',
                'code' => 'CY',
                'iso3' => 'CYP',
                'currency' => 'EUR',
                'languages' => 'el-CY,tr-CY,en'
            ],
            [
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'iso3' => 'CZE',
                'currency' => 'CZK',
                'languages' => 'cs,sk'
            ],
            [
                'name' => 'Germany',
                'code' => 'DE',
                'iso3' => 'DEU',
                'currency' => 'EUR',
                'languages' => 'de'
            ],
            [
                'name' => 'Djibouti',
                'code' => 'DJ',
                'iso3' => 'DJI',
                'currency' => 'DJF',
                'languages' => 'fr-DJ,ar,so-DJ,aa'
            ],
            [
                'name' => 'Denmark',
                'code' => 'DK',
                'iso3' => 'DNK',
                'currency' => 'DKK',
                'languages' => 'da-DK,en,fo,de-DK'
            ],
            [
                'name' => 'Dominica',
                'code' => 'DM',
                'iso3' => 'DMA',
                'currency' => 'XCD',
                'languages' => 'en-DM'
            ],
            [
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'iso3' => 'DOM',
                'currency' => 'DOP',
                'languages' => 'es-DO'
            ],
            [
                'name' => 'Algeria',
                'code' => 'DZ',
                'iso3' => 'DZA',
                'currency' => 'DZD',
                'languages' => 'ar-DZ'
            ],
            [
                'name' => 'Ecuador',
                'code' => 'EC',
                'iso3' => 'ECU',
                'currency' => 'USD',
                'languages' => 'es-EC'
            ],
            [
                'name' => 'Estonia',
                'code' => 'EE',
                'iso3' => 'EST',
                'currency' => 'EUR',
                'languages' => 'et,ru'
            ],
            [
                'name' => 'Egypt',
                'code' => 'EG',
                'iso3' => 'EGY',
                'currency' => 'EGP',
                'languages' => 'ar-EG,en,fr'
            ],
            [
                'name' => 'Western Sahara',
                'code' => 'EH',
                'iso3' => 'ESH',
                'currency' => 'MAD',
                'languages' => 'ar,mey'
            ],
            [
                'name' => 'Eritrea',
                'code' => 'ER',
                'iso3' => 'ERI',
                'currency' => 'ERN',
                'languages' => 'aa-ER,ar,tig,kun,ti-ER'
            ],
            [
                'name' => 'Spain',
                'code' => 'ES',
                'iso3' => 'ESP',
                'currency' => 'EUR',
                'languages' => 'es-ES,ca,gl,eu,oc'
            ],
            [
                'name' => 'Ethiopia',
                'code' => 'ET',
                'iso3' => 'ETH',
                'currency' => 'ETB',
                'languages' => 'am,en-ET,om-ET,ti-ET,so-ET,sid'
            ],
            [
                'name' => 'Finland',
                'code' => 'FI',
                'iso3' => 'FIN',
                'currency' => 'EUR',
                'languages' => 'fi-FI,sv-FI,smn'
            ],
            [
                'name' => 'Fiji',
                'code' => 'FJ',
                'iso3' => 'FJI',
                'currency' => 'FJD',
                'languages' => 'en-FJ,fj'
            ],
            [
                'name' => 'Falkland Islands',
                'code' => 'FK',
                'iso3' => 'FLK',
                'currency' => 'FKP',
                'languages' => 'en-FK'
            ],
            [
                'name' => 'Micronesia',
                'code' => 'FM',
                'iso3' => 'FSM',
                'currency' => 'USD',
                'languages' => 'en-FM,chk,pon,yap,kos,uli,woe,nkr,kpg'
            ],
            [
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'iso3' => 'FRO',
                'currency' => 'DKK',
                'languages' => 'fo,da-FO'
            ],
            [
                'name' => 'France',
                'code' => 'FR',
                'iso3' => 'FRA',
                'currency' => 'EUR',
                'languages' => 'fr-FR,frp,br,co,ca,eu,oc'
            ],
            [
                'name' => 'Gabon',
                'code' => 'GA',
                'iso3' => 'GAB',
                'currency' => 'XAF',
                'languages' => 'fr-GA'
            ],
            [
                'name' => 'United Kingdom of Great Britain and Northern Ireland',
                'code' => 'GB',
                'iso3' => 'GBR',
                'currency' => 'GBP',
                'languages' => 'en-GB,cy-GB,gd'
            ],
            [
                'name' => 'Grenada',
                'code' => 'GD',
                'iso3' => 'GRD',
                'currency' => 'XCD',
                'languages' => 'en-GD'
            ],
            [
                'name' => 'Georgia',
                'code' => 'GE',
                'iso3' => 'GEO',
                'currency' => 'GEL',
                'languages' => 'ka,ru,hy,az'
            ],
            [
                'name' => 'French Guiana',
                'code' => 'GF',
                'iso3' => 'GUF',
                'currency' => 'EUR',
                'languages' => 'fr-GF'
            ],
            [
                'name' => 'Guernsey',
                'code' => 'GG',
                'iso3' => 'GGY',
                'currency' => 'GBP',
                'languages' => 'en,fr'
            ],
            [
                'name' => 'Ghana',
                'code' => 'GH',
                'iso3' => 'GHA',
                'currency' => 'GHS',
                'languages' => 'en-GH,ak,ee,tw'
            ],
            [
                'name' => 'Gibraltar',
                'code' => 'GI',
                'iso3' => 'GIB',
                'currency' => 'GIP',
                'languages' => 'en-GI,es,it,pt'
            ],
            [
                'name' => 'Greenland',
                'code' => 'GL',
                'iso3' => 'GRL',
                'currency' => 'DKK',
                'languages' => 'kl,da-GL,en'
            ],
            [
                'name' => 'Gambia',
                'code' => 'GM',
                'iso3' => 'GMB',
                'currency' => 'GMD',
                'languages' => 'en-GM,mnk,wof,wo,ff'
            ],
            [
                'name' => 'Guinea',
                'code' => 'GN',
                'iso3' => 'GIN',
                'currency' => 'GNF',
                'languages' => 'fr-GN'
            ],
            [
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'iso3' => 'GLP',
                'currency' => 'EUR',
                'languages' => 'fr-GP'
            ],
            [
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'iso3' => 'GNQ',
                'currency' => 'XAF',
                'languages' => 'es-GQ,fr'
            ],
            [
                'name' => 'Greece',
                'code' => 'GR',
                'iso3' => 'GRC',
                'currency' => 'EUR',
                'languages' => 'el-GR,en,fr'
            ],
            [
                'name' => 'South Georgia and the South Sandwich Islands',
                'code' => 'GS',
                'iso3' => 'SGS',
                'currency' => 'GBP',
                'languages' => 'en'
            ],
            [
                'name' => 'Guatemala',
                'code' => 'GT',
                'iso3' => 'GTM',
                'currency' => 'GTQ',
                'languages' => 'es-GT'
            ],
            [
                'name' => 'Guam',
                'code' => 'GU',
                'iso3' => 'GUM',
                'currency' => 'USD',
                'languages' => 'en-GU,ch-GU'
            ],
            [
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'iso3' => 'GNB',
                'currency' => 'XOF',
                'languages' => 'pt-GW,pov'
            ],
            [
                'name' => 'Guyana',
                'code' => 'GY',
                'iso3' => 'GUY',
                'currency' => 'GYD',
                'languages' => 'en-GY'
            ],
            [
                'name' => 'Hong Kong',
                'code' => 'HK',
                'iso3' => 'HKG',
                'currency' => 'HKD',
                'languages' => 'zh-HK,yue,zh,en'
            ],
            [
                'name' => 'Heard Island and McDonald Islands',
                'code' => 'HM',
                'iso3' => 'HMD',
                'currency' => 'AUD',
                'languages' => ''
            ],
            [
                'name' => 'Honduras',
                'code' => 'HN',
                'iso3' => 'HND',
                'currency' => 'HNL',
                'languages' => 'es-HN'
            ],
            [
                'name' => 'Croatia',
                'code' => 'HR',
                'iso3' => 'HRV',
                'currency' => 'HRK',
                'languages' => 'hr-HR,sr'
            ],
            [
                'name' => 'Haiti',
                'code' => 'HT',
                'iso3' => 'HTI',
                'currency' => 'HTG',
                'languages' => 'ht,fr-HT'
            ],
            [
                'name' => 'Hungary',
                'code' => 'HU',
                'iso3' => 'HUN',
                'currency' => 'HUF',
                'languages' => 'hu-HU'
            ],
            [
                'name' => 'Indonesia',
                'code' => 'ID',
                'iso3' => 'IDN',
                'currency' => 'IDR',
                'languages' => 'id,en,nl,jv'
            ],
            [
                'name' => 'Ireland',
                'code' => 'IE',
                'iso3' => 'IRL',
                'currency' => 'EUR',
                'languages' => 'en-IE,ga-IE'
            ],
            [
                'name' => 'Israel',
                'code' => 'IL',
                'iso3' => 'ISR',
                'currency' => 'ILS',
                'languages' => 'he,ar-IL,en-IL,'
            ],
            [
                'name' => 'Isle of Man',
                'code' => 'IM',
                'iso3' => 'IMN',
                'currency' => 'GBP',
                'languages' => 'en,gv'
            ],
            [
                'name' => 'India',
                'code' => 'IN',
                'iso3' => 'IND',
                'currency' => 'INR',
                'languages' => 'en-IN,hi,bn,te,mr,ta,ur,gu,kn,ml,or,pa,as,bh,sat,ks,ne,sd,kok,doi,mni,sit,sa,fr,lus,inc'
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'iso3' => 'IOT',
                'currency' => 'USD',
                'languages' => 'en-IO'
            ],
            [
                'name' => 'Iraq',
                'code' => 'IQ',
                'iso3' => 'IRQ',
                'currency' => 'IQD',
                'languages' => 'ar-IQ,ku,hy'
            ],
            [
                'name' => 'Iran',
                'code' => 'IR',
                'iso3' => 'IRN',
                'currency' => 'IRR',
                'languages' => 'fa-IR,ku'
            ],
            [
                'name' => 'Iceland',
                'code' => 'IS',
                'iso3' => 'ISL',
                'currency' => 'ISK',
                'languages' => 'is,en,de,da,sv,no'
            ],
            [
                'name' => 'Italy',
                'code' => 'IT',
                'iso3' => 'ITA',
                'currency' => 'EUR',
                'languages' => 'it-IT,de-IT,fr-IT,sc,ca,co,sl'
            ],
            [
                'name' => 'Jersey',
                'code' => 'JE',
                'iso3' => 'JEY',
                'currency' => 'GBP',
                'languages' => 'en,pt'
            ],
            [
                'name' => 'Jamaica',
                'code' => 'JM',
                'iso3' => 'JAM',
                'currency' => 'JMD',
                'languages' => 'en-JM'
            ],
            [
                'name' => 'Jordan',
                'code' => 'JO',
                'iso3' => 'JOR',
                'currency' => 'JOD',
                'languages' => 'ar-JO,en'
            ],
            [
                'name' => 'Japan',
                'code' => 'JP',
                'iso3' => 'JPN',
                'currency' => 'JPY',
                'languages' => 'ja'
            ],
            [
                'name' => 'Kenya',
                'code' => 'KE',
                'iso3' => 'KEN',
                'currency' => 'KES',
                'languages' => 'en-KE,sw-KE'
            ],
            [
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'iso3' => 'KGZ',
                'currency' => 'KGS',
                'languages' => 'ky,uz,ru'
            ],
            [
                'name' => 'Cambodia',
                'code' => 'KH',
                'iso3' => 'KHM',
                'currency' => 'KHR',
                'languages' => 'km,fr,en'
            ],
            [
                'name' => 'Kiribati',
                'code' => 'KI',
                'iso3' => 'KIR',
                'currency' => 'AUD',
                'languages' => 'en-KI,gil'
            ],
            [
                'name' => 'Comoros',
                'code' => 'KM',
                'iso3' => 'COM',
                'currency' => 'KMF',
                'languages' => 'ar,fr-KM'
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
                'iso3' => 'KNA',
                'currency' => 'XCD',
                'languages' => 'en-KN'
            ],
            [
                'name' => 'North Korea',
                'code' => 'KP',
                'iso3' => 'PRK',
                'currency' => 'KPW',
                'languages' => 'ko-KP'
            ],
            [
                'name' => 'South Korea',
                'code' => 'KR',
                'iso3' => 'KOR',
                'currency' => 'KRW',
                'languages' => 'ko-KR,en'
            ],
            [
                'name' => 'Kuwait',
                'code' => 'KW',
                'iso3' => 'KWT',
                'currency' => 'KWD',
                'languages' => 'ar-KW,en'
            ],
            [
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'iso3' => 'CYM',
                'currency' => 'KYD',
                'languages' => 'en-KY'
            ],
            [
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'iso3' => 'KAZ',
                'currency' => 'KZT',
                'languages' => 'kk,ru'
            ],
            [
                'name' => 'Laos',
                'code' => 'LA',
                'iso3' => 'LAO',
                'currency' => 'LAK',
                'languages' => 'lo,fr,en'
            ],
            [
                'name' => 'Lebanon',
                'code' => 'LB',
                'iso3' => 'LBN',
                'currency' => 'LBP',
                'languages' => 'ar-LB,fr-LB,en,hy'
            ],
            [
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'iso3' => 'LCA',
                'currency' => 'XCD',
                'languages' => 'en-LC'
            ],
            [
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'iso3' => 'LIE',
                'currency' => 'CHF',
                'languages' => 'de-LI'
            ],
            [
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'iso3' => 'LKA',
                'currency' => 'LKR',
                'languages' => 'si,ta,en'
            ],
            [
                'name' => 'Liberia',
                'code' => 'LR',
                'iso3' => 'LBR',
                'currency' => 'LRD',
                'languages' => 'en-LR'
            ],
            [
                'name' => 'Lesotho',
                'code' => 'LS',
                'iso3' => 'LSO',
                'currency' => 'LSL',
                'languages' => 'en-LS,st,zu,xh'
            ],
            [
                'name' => 'Lithuania',
                'code' => 'LT',
                'iso3' => 'LTU',
                'currency' => 'EUR',
                'languages' => 'lt,ru,pl'
            ],
            [
                'name' => 'Luxembourg',
                'code' => 'LU',
                'iso3' => 'LUX',
                'currency' => 'EUR',
                'languages' => 'lb,de-LU,fr-LU'
            ],
            [
                'name' => 'Latvia',
                'code' => 'LV',
                'iso3' => 'LVA',
                'currency' => 'EUR',
                'languages' => 'lv,ru,lt'
            ],
            [
                'name' => 'Libya',
                'code' => 'LY',
                'iso3' => 'LBY',
                'currency' => 'LYD',
                'languages' => 'ar-LY,it,en'
            ],
            [
                'name' => 'Morocco',
                'code' => 'MA',
                'iso3' => 'MAR',
                'currency' => 'MAD',
                'languages' => 'ar-MA,fr'
            ],
            [
                'name' => 'Monaco',
                'code' => 'MC',
                'iso3' => 'MCO',
                'currency' => 'EUR',
                'languages' => 'fr-MC,en,it'
            ],
            [
                'name' => 'Moldova',
                'code' => 'MD',
                'iso3' => 'MDA',
                'currency' => 'MDL',
                'languages' => 'ro,ru,gag,tr'
            ],
            [
                'name' => 'Montenegro',
                'code' => 'ME',
                'iso3' => 'MNE',
                'currency' => 'EUR',
                'languages' => 'sr,hu,bs,sq,hr,rom'
            ],
            [
                'name' => 'Saint Martin',
                'code' => 'MF',
                'iso3' => 'MAF',
                'currency' => 'EUR',
                'languages' => 'fr'
            ],
            [
                'name' => 'Madagascar',
                'code' => 'MG',
                'iso3' => 'MDG',
                'currency' => 'MGA',
                'languages' => 'fr-MG,mg'
            ],
            [
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'iso3' => 'MHL',
                'currency' => 'USD',
                'languages' => 'mh,en-MH'
            ],
            [
                'name' => 'North Macedonia',
                'code' => 'MK',
                'iso3' => 'MKD',
                'currency' => 'MKD',
                'languages' => 'mk,sq,tr,rmm,sr'
            ],
            [
                'name' => 'Mali',
                'code' => 'ML',
                'iso3' => 'MLI',
                'currency' => 'XOF',
                'languages' => 'fr-ML,bm'
            ],
            [
                'name' => 'Myanmar [Burma]',
                'code' => 'MM',
                'iso3' => 'MMR',
                'currency' => 'MMK',
                'languages' => 'my'
            ],
            [
                'name' => 'Mongolia',
                'code' => 'MN',
                'iso3' => 'MNG',
                'currency' => 'MNT',
                'languages' => 'mn,ru'
            ],
            [
                'name' => 'Macao',
                'code' => 'MO',
                'iso3' => 'MAC',
                'currency' => 'MOP',
                'languages' => 'zh,zh-MO,pt'
            ],
            [
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'iso3' => 'MNP',
                'currency' => 'USD',
                'languages' => 'fil,tl,zh,ch-MP,en-MP'
            ],
            [
                'name' => 'Martinique',
                'code' => 'MQ',
                'iso3' => 'MTQ',
                'currency' => 'EUR',
                'languages' => 'fr-MQ'
            ],
            [
                'name' => 'Mauritania',
                'code' => 'MR',
                'iso3' => 'MRT',
                'currency' => 'MRO',
                'languages' => 'ar-MR,fuc,snk,fr,mey,wo'
            ],
            [
                'name' => 'Montserrat',
                'code' => 'MS',
                'iso3' => 'MSR',
                'currency' => 'XCD',
                'languages' => 'en-MS'
            ],
            [
                'name' => 'Malta',
                'code' => 'MT',
                'iso3' => 'MLT',
                'currency' => 'EUR',
                'languages' => 'mt,en-MT'
            ],
            [
                'name' => 'Mauritius',
                'code' => 'MU',
                'iso3' => 'MUS',
                'currency' => 'MUR',
                'languages' => 'en-MU,bho,fr'
            ],
            [
                'name' => 'Maldives',
                'code' => 'MV',
                'iso3' => 'MDV',
                'currency' => 'MVR',
                'languages' => 'dv,en'
            ],
            [
                'name' => 'Malawi',
                'code' => 'MW',
                'iso3' => 'MWI',
                'currency' => 'MWK',
                'languages' => 'ny,yao,tum,swk'
            ],
            [
                'name' => 'Mexico',
                'code' => 'MX',
                'iso3' => 'MEX',
                'currency' => 'MXN',
                'languages' => 'es-MX'
            ],
            [
                'name' => 'Malaysia',
                'code' => 'MY',
                'iso3' => 'MYS',
                'currency' => 'MYR',
                'languages' => 'ms-MY,en,zh,ta,te,ml,pa,th'
            ],
            [
                'name' => 'Mozambique',
                'code' => 'MZ',
                'iso3' => 'MOZ',
                'currency' => 'MZN',
                'languages' => 'pt-MZ,vmw'
            ],
            [
                'name' => 'Namibia',
                'code' => 'NA',
                'iso3' => 'NAM',
                'currency' => 'NAD',
                'languages' => 'en-NA,af,de,hz,naq'
            ],
            [
                'name' => 'New Caledonia',
                'code' => 'NC',
                'iso3' => 'NCL',
                'currency' => 'XPF',
                'languages' => 'fr-NC'
            ],
            [
                'name' => 'Niger',
                'code' => 'NE',
                'iso3' => 'NER',
                'currency' => 'XOF',
                'languages' => 'fr-NE,ha,kr,dje'
            ],
            [
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'iso3' => 'NFK',
                'currency' => 'AUD',
                'languages' => 'en-NF'
            ],
            [
                'name' => 'Nigeria',
                'code' => 'NG',
                'iso3' => 'NGA',
                'currency' => 'NGN',
                'languages' => 'en-NG,ha,yo,ig,ff'
            ],
            [
                'name' => 'Nicaragua',
                'code' => 'NI',
                'iso3' => 'NIC',
                'currency' => 'NIO',
                'languages' => 'es-NI,en'
            ],
            [
                'name' => 'Netherlands',
                'code' => 'NL',
                'iso3' => 'NLD',
                'currency' => 'EUR',
                'languages' => 'nl-NL,fy-NL'
            ],
            [
                'name' => 'Norway',
                'code' => 'NO',
                'iso3' => 'NOR',
                'currency' => 'NOK',
                'languages' => 'no,nb,nn,se,fi'
            ],
            [
                'name' => 'Nepal',
                'code' => 'NP',
                'iso3' => 'NPL',
                'currency' => 'NPR',
                'languages' => 'ne,en'
            ],
            [
                'name' => 'Nauru',
                'code' => 'NR',
                'iso3' => 'NRU',
                'currency' => 'AUD',
                'languages' => 'na,en-NR'
            ],
            [
                'name' => 'Niue',
                'code' => 'NU',
                'iso3' => 'NIU',
                'currency' => 'NZD',
                'languages' => 'niu,en-NU'
            ],
            [
                'name' => 'New Zealand',
                'code' => 'NZ',
                'iso3' => 'NZL',
                'currency' => 'NZD',
                'languages' => 'en-NZ,mi'
            ],
            [
                'name' => 'Oman',
                'code' => 'OM',
                'iso3' => 'OMN',
                'currency' => 'OMR',
                'languages' => 'ar-OM,en,bal,ur'
            ],
            [
                'name' => 'Panama',
                'code' => 'PA',
                'iso3' => 'PAN',
                'currency' => 'PAB',
                'languages' => 'es-PA,en'
            ],
            [
                'name' => 'Peru',
                'code' => 'PE',
                'iso3' => 'PER',
                'currency' => 'PEN',
                'languages' => 'es-PE,qu,ay'
            ],
            [
                'name' => 'French Polynesia',
                'code' => 'PF',
                'iso3' => 'PYF',
                'currency' => 'XPF',
                'languages' => 'fr-PF,ty'
            ],
            [
                'name' => 'Papua New Guinea',
                'code' => 'PG',
                'iso3' => 'PNG',
                'currency' => 'PGK',
                'languages' => 'en-PG,ho,meu,tpi'
            ],
            [
                'name' => 'Philippines',
                'code' => 'PH',
                'iso3' => 'PHL',
                'currency' => 'PHP',
                'languages' => 'tl,en-PH,fil'
            ],
            [
                'name' => 'Pakistan',
                'code' => 'PK',
                'iso3' => 'PAK',
                'currency' => 'PKR',
                'languages' => 'ur-PK,en-PK,pa,sd,ps,brh'
            ],
            [
                'name' => 'Poland',
                'code' => 'PL',
                'iso3' => 'POL',
                'currency' => 'PLN',
                'languages' => 'pl'
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
                'iso3' => 'SPM',
                'currency' => 'EUR',
                'languages' => 'fr-PM'
            ],
            [
                'name' => 'Pitcairn Islands',
                'code' => 'PN',
                'iso3' => 'PCN',
                'currency' => 'NZD',
                'languages' => 'en-PN'
            ],
            [
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'iso3' => 'PRI',
                'currency' => 'USD',
                'languages' => 'en-PR,es-PR'
            ],
            [
                'name' => 'Palestine',
                'code' => 'PS',
                'iso3' => 'PSE',
                'currency' => 'ILS',
                'languages' => 'ar-PS'
            ],
            [
                'name' => 'Portugal',
                'code' => 'PT',
                'iso3' => 'PRT',
                'currency' => 'EUR',
                'languages' => 'pt-PT,mwl'
            ],
            [
                'name' => 'Palau',
                'code' => 'PW',
                'iso3' => 'PLW',
                'currency' => 'USD',
                'languages' => 'pau,sov,en-PW,tox,ja,fil,zh'
            ],
            [
                'name' => 'Paraguay',
                'code' => 'PY',
                'iso3' => 'PRY',
                'currency' => 'PYG',
                'languages' => 'es-PY,gn'
            ],
            [
                'name' => 'Qatar',
                'code' => 'QA',
                'iso3' => 'QAT',
                'currency' => 'QAR',
                'languages' => 'ar-QA,es'
            ],
            [
                'name' => 'Réunion',
                'code' => 'RE',
                'iso3' => 'REU',
                'currency' => 'EUR',
                'languages' => 'fr-RE'
            ],
            [
                'name' => 'Romania',
                'code' => 'RO',
                'iso3' => 'ROU',
                'currency' => 'RON',
                'languages' => 'ro,hu,rom'
            ],
            [
                'name' => 'Serbia',
                'code' => 'RS',
                'iso3' => 'SRB',
                'currency' => 'RSD',
                'languages' => 'sr,hu,bs,rom'
            ],
            [
                'name' => 'Russia',
                'code' => 'RU',
                'iso3' => 'RUS',
                'currency' => 'RUB',
                'languages' => 'ru,tt,xal,cau,ady,kv,ce,tyv,cv,udm,tut,mns,bua,myv,mdf,chm,ba,inh,tut,kbd,krc,ava,sah,nog'
            ],
            [
                'name' => 'Rwanda',
                'code' => 'RW',
                'iso3' => 'RWA',
                'currency' => 'RWF',
                'languages' => 'rw,en-RW,fr-RW,sw'
            ],
            [
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'iso3' => 'SAU',
                'currency' => 'SAR',
                'languages' => 'ar-SA'
            ],
            [
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'iso3' => 'SLB',
                'currency' => 'SBD',
                'languages' => 'en-SB,tpi'
            ],
            [
                'name' => 'Seychelles',
                'code' => 'SC',
                'iso3' => 'SYC',
                'currency' => 'SCR',
                'languages' => 'en-SC,fr-SC'
            ],
            [
                'name' => 'Sudan',
                'code' => 'SD',
                'iso3' => 'SDN',
                'currency' => 'SDG',
                'languages' => 'ar-SD,en,fia'
            ],
            [
                'name' => 'Sweden',
                'code' => 'SE',
                'iso3' => 'SWE',
                'currency' => 'SEK',
                'languages' => 'sv-SE,se,sma,fi-SE'
            ],
            [
                'name' => 'Singapore',
                'code' => 'SG',
                'iso3' => 'SGP',
                'currency' => 'SGD',
                'languages' => 'cmn,en-SG,ms-SG,ta-SG,zh-SG'
            ],
            [
                'name' => 'Saint Helena',
                'code' => 'SH',
                'iso3' => 'SHN',
                'currency' => 'SHP',
                'languages' => 'en-SH'
            ],
            [
                'name' => 'Slovenia',
                'code' => 'SI',
                'iso3' => 'SVN',
                'currency' => 'EUR',
                'languages' => 'sl,sh'
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'code' => 'SJ',
                'iso3' => 'SJM',
                'currency' => 'NOK',
                'languages' => 'no,ru'
            ],
            [
                'name' => 'Slovakia',
                'code' => 'SK',
                'iso3' => 'SVK',
                'currency' => 'EUR',
                'languages' => 'sk,hu'
            ],
            [
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'iso3' => 'SLE',
                'currency' => 'SLL',
                'languages' => 'en-SL,men,tem'
            ],
            [
                'name' => 'San Marino',
                'code' => 'SM',
                'iso3' => 'SMR',
                'currency' => 'EUR',
                'languages' => 'it-SM'
            ],
            [
                'name' => 'Senegal',
                'code' => 'SN',
                'iso3' => 'SEN',
                'currency' => 'XOF',
                'languages' => 'fr-SN,wo,fuc,mnk'
            ],
            [
                'name' => 'Somalia',
                'code' => 'SO',
                'iso3' => 'SOM',
                'currency' => 'SOS',
                'languages' => 'so-SO,ar-SO,it,en-SO'
            ],
            [
                'name' => 'Suriname',
                'code' => 'SR',
                'iso3' => 'SUR',
                'currency' => 'SRD',
                'languages' => 'nl-SR,en,srn,hns,jv'
            ],
            [
                'name' => 'South Sudan',
                'code' => 'SS',
                'iso3' => 'SSD',
                'currency' => 'SSP',
                'languages' => 'en'
            ],
            [
                'name' => 'São Tomé and Príncipe',
                'code' => 'ST',
                'iso3' => 'STP',
                'currency' => 'STD',
                'languages' => 'pt-ST'
            ],
            [
                'name' => 'El Salvador',
                'code' => 'SV',
                'iso3' => 'SLV',
                'currency' => 'USD',
                'languages' => 'es-SV'
            ],
            [
                'name' => 'Sint Maarten',
                'code' => 'SX',
                'iso3' => 'SXM',
                'currency' => 'ANG',
                'languages' => 'nl,en'
            ],
            [
                'name' => 'Syria',
                'code' => 'SY',
                'iso3' => 'SYR',
                'currency' => 'SYP',
                'languages' => 'ar-SY,ku,hy,arc,fr,en'
            ],
            [
                'name' => 'Swaziland',
                'code' => 'SZ',
                'iso3' => 'SWZ',
                'currency' => 'SZL',
                'languages' => 'en-SZ,ss-SZ'
            ],
            [
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'iso3' => 'TCA',
                'currency' => 'USD',
                'languages' => 'en-TC'
            ],
            [
                'name' => 'Chad',
                'code' => 'TD',
                'iso3' => 'TCD',
                'currency' => 'XAF',
                'languages' => 'fr-TD,ar-TD,sre'
            ],
            [
                'name' => 'French Southern Territories',
                'code' => 'TF',
                'iso3' => 'ATF',
                'currency' => 'EUR',
                'languages' => 'fr'
            ],
            [
                'name' => 'Togo',
                'code' => 'TG',
                'iso3' => 'TGO',
                'currency' => 'XOF',
                'languages' => 'fr-TG,ee,hna,kbp,dag,ha'
            ],
            [
                'name' => 'Thailand',
                'code' => 'TH',
                'iso3' => 'THA',
                'currency' => 'THB',
                'languages' => 'th,en'
            ],
            [
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'iso3' => 'TJK',
                'currency' => 'TJS',
                'languages' => 'tg,ru'
            ],
            [
                'name' => 'Tokelau',
                'code' => 'TK',
                'iso3' => 'TKL',
                'currency' => 'NZD',
                'languages' => 'tkl,en-TK'
            ],
            [
                'name' => 'East Timor',
                'code' => 'TL',
                'iso3' => 'TLS',
                'currency' => 'USD',
                'languages' => 'tet,pt-TL,id,en'
            ],
            [
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'iso3' => 'TKM',
                'currency' => 'TMT',
                'languages' => 'tk,ru,uz'
            ],
            [
                'name' => 'Tunisia',
                'code' => 'TN',
                'iso3' => 'TUN',
                'currency' => 'TND',
                'languages' => 'ar-TN,fr'
            ],
            [
                'name' => 'Tonga',
                'code' => 'TO',
                'iso3' => 'TON',
                'currency' => 'TOP',
                'languages' => 'to,en-TO'
            ],
            [
                'name' => 'Turkey',
                'code' => 'TR',
                'iso3' => 'TUR',
                'currency' => 'TRY',
                'languages' => 'tr-TR,ku,diq,az,av'
            ],
            [
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
                'iso3' => 'TTO',
                'currency' => 'TTD',
                'languages' => 'en-TT,hns,fr,es,zh'
            ],
            [
                'name' => 'Tuvalu',
                'code' => 'TV',
                'iso3' => 'TUV',
                'currency' => 'AUD',
                'languages' => 'tvl,en,sm,gil'
            ],
            [
                'name' => 'Taiwan',
                'code' => 'TW',
                'iso3' => 'TWN',
                'currency' => 'TWD',
                'languages' => 'zh-TW,zh,nan,hak'
            ],
            [
                'name' => 'Tanzania',
                'code' => 'TZ',
                'iso3' => 'TZA',
                'currency' => 'TZS',
                'languages' => 'sw-TZ,en,ar'
            ],
            [
                'name' => 'Ukraine',
                'code' => 'UA',
                'iso3' => 'UKR',
                'currency' => 'UAH',
                'languages' => 'uk,ru-UA,rom,pl,hu'
            ],
            [
                'name' => 'Uganda',
                'code' => 'UG',
                'iso3' => 'UGA',
                'currency' => 'UGX',
                'languages' => 'en-UG,lg,sw,ar'
            ],
            [
                'name' => 'U.S. Minor Outlying Islands',
                'code' => 'UM',
                'iso3' => 'UMI',
                'currency' => 'USD',
                'languages' => 'en-UM'
            ],
            [
                'name' => 'United States',
                'code' => 'US',
                'iso3' => 'USA',
                'currency' => 'USD',
                'languages' => 'en-US,es-US,haw,fr'
            ],
            [
                'name' => 'Uruguay',
                'code' => 'UY',
                'iso3' => 'URY',
                'currency' => 'UYU',
                'languages' => 'es-UY'
            ],
            [
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'iso3' => 'UZB',
                'currency' => 'UZS',
                'languages' => 'uz,ru,tg'
            ],
            [
                'name' => 'Vatican City',
                'code' => 'VA',
                'iso3' => 'VAT',
                'currency' => 'EUR',
                'languages' => 'la,it,fr'
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'iso3' => 'VCT',
                'currency' => 'XCD',
                'languages' => 'en-VC,fr'
            ],
            [
                'name' => 'Venezuela',
                'code' => 'VE',
                'iso3' => 'VEN',
                'currency' => 'VEF',
                'languages' => 'es-VE'
            ],
            [
                'name' => 'British Virgin Islands',
                'code' => 'VG',
                'iso3' => 'VGB',
                'currency' => 'USD',
                'languages' => 'en-VG'
            ],
            [
                'name' => 'U.S. Virgin Islands',
                'code' => 'VI',
                'iso3' => 'VIR',
                'currency' => 'USD',
                'languages' => 'en-VI'
            ],
            [
                'name' => 'Vietnam',
                'code' => 'VN',
                'iso3' => 'VNM',
                'currency' => 'VND',
                'languages' => 'vi,en,fr,zh,km'
            ],
            [
                'name' => 'Vanuatu',
                'code' => 'VU',
                'iso3' => 'VUT',
                'currency' => 'VUV',
                'languages' => 'bi,en-VU,fr-VU'
            ],
            [
                'name' => 'Wallis and Futuna',
                'code' => 'WF',
                'iso3' => 'WLF',
                'currency' => 'XPF',
                'languages' => 'wls,fud,fr-WF'
            ],
            [
                'name' => 'Samoa',
                'code' => 'WS',
                'iso3' => 'WSM',
                'currency' => 'WST',
                'languages' => 'sm,en-WS'
            ],
            [
                'name' => 'Kosovo',
                'code' => 'XK',
                'iso3' => 'XKX',
                'currency' => 'EUR',
                'languages' => 'sq,sr'
            ],
            [
                'name' => 'Yemen',
                'code' => 'YE',
                'iso3' => 'YEM',
                'currency' => 'YER',
                'languages' => 'ar-YE'
            ],
            [
                'name' => 'Mayotte',
                'code' => 'YT',
                'iso3' => 'MYT',
                'currency' => 'EUR',
                'languages' => 'fr-YT'
            ],
            [
                'name' => 'South Africa',
                'code' => 'ZA',
                'iso3' => 'ZAF',
                'currency' => 'ZAR',
                'languages' => 'zu,xh,af,nso,en-ZA,tn,st,ts,ss,ve,nr'
            ],
            [
                'name' => 'Zambia',
                'code' => 'ZM',
                'iso3' => 'ZMB',
                'currency' => 'ZMW',
                'languages' => 'en-ZM,bem,loz,lun,lue,ny,toi'
            ],
            [
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'iso3' => 'ZWE',
                'currency' => 'ZWL',
                'languages' => 'en-ZW,sn,nr,nd'
            ]
        ];

        \DB::table('countries')->insert($countries);
    }
}
