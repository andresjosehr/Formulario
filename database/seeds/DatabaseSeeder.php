<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {




    	DB::table("municipios")->delete();
    	DB::table("establecimientos_educativos")->delete();
















	        DB::table("municipios")->insert(["nombre" => 'Albán']);
			DB::table("municipios")->insert(["nombre" => 'Aldana']);
			DB::table("municipios")->insert(["nombre" => 'Ancuyá']);
			DB::table("municipios")->insert(["nombre" => 'Arboleda']);
			DB::table("municipios")->insert(["nombre" => 'Barbacoas']);
			DB::table("municipios")->insert(["nombre" => 'Barbacoas ']);
			DB::table("municipios")->insert(["nombre" => 'Belén']);
			DB::table("municipios")->insert(["nombre" => 'Buesaco']);
			DB::table("municipios")->insert(["nombre" => 'Chachagüí']);
			DB::table("municipios")->insert(["nombre" => 'Colón']);
			DB::table("municipios")->insert(["nombre" => 'Consacá']);
			DB::table("municipios")->insert(["nombre" => 'Córdoba']);
			DB::table("municipios")->insert(["nombre" => 'Cuaspud']);
			DB::table("municipios")->insert(["nombre" => 'Cumbal']);
			DB::table("municipios")->insert(["nombre" => 'Cumbitara']);
			DB::table("municipios")->insert(["nombre" => 'El Charco']);
			DB::table("municipios")->insert(["nombre" => 'El Peñol']);
			DB::table("municipios")->insert(["nombre" => 'El Rosario']);
			DB::table("municipios")->insert(["nombre" => 'El Tablón']);
			DB::table("municipios")->insert(["nombre" => 'El Tambo']);
			DB::table("municipios")->insert(["nombre" => 'Funes']);
			DB::table("municipios")->insert(["nombre" => 'Guachucal']);
			DB::table("municipios")->insert(["nombre" => 'Guaitarilla']);
			DB::table("municipios")->insert(["nombre" => 'Gualmatán']);
			DB::table("municipios")->insert(["nombre" => 'Iles']);
			DB::table("municipios")->insert(["nombre" => 'Imués']);
			DB::table("municipios")->insert(["nombre" => 'La Cruz']);
			DB::table("municipios")->insert(["nombre" => 'La Florida']);
			DB::table("municipios")->insert(["nombre" => 'La Llanada']);
			DB::table("municipios")->insert(["nombre" => 'La Unión']);
			DB::table("municipios")->insert(["nombre" => 'Leiva']);
			DB::table("municipios")->insert(["nombre" => 'Linares']);
			DB::table("municipios")->insert(["nombre" => 'Los Andes']);
			DB::table("municipios")->insert(["nombre" => 'Magüí']);
			DB::table("municipios")->insert(["nombre" => 'Mallama']);
			DB::table("municipios")->insert(["nombre" => 'Mosquera']);
			DB::table("municipios")->insert(["nombre" => 'Olaya Herrera']);
			DB::table("municipios")->insert(["nombre" => 'Ospina']);
			DB::table("municipios")->insert(["nombre" => 'Policarpa']);
			DB::table("municipios")->insert(["nombre" => 'Potosí']);
			DB::table("municipios")->insert(["nombre" => 'Providencia']);
			DB::table("municipios")->insert(["nombre" => 'Puerres']);
			DB::table("municipios")->insert(["nombre" => 'Pupiales']);
			DB::table("municipios")->insert(["nombre" => 'Ricaurte']);
			DB::table("municipios")->insert(["nombre" => 'Roberto Payán']);
			DB::table("municipios")->insert(["nombre" => 'Samaniego']);
			DB::table("municipios")->insert(["nombre" => 'San Bernardo']);
			DB::table("municipios")->insert(["nombre" => 'San Lorenzo']);
			DB::table("municipios")->insert(["nombre" => 'San Pablo']);
			DB::table("municipios")->insert(["nombre" => 'San Pedro De Cartago']);
			DB::table("municipios")->insert(["nombre" => 'Sandoná']);
			DB::table("municipios")->insert(["nombre" => 'Santa Bárbara']);
			DB::table("municipios")->insert(["nombre" => 'Santacruz']);
			DB::table("municipios")->insert(["nombre" => 'Sapuyes']);
			DB::table("municipios")->insert(["nombre" => 'Taminango']);
			DB::table("municipios")->insert(["nombre" => 'Tangua']);
			DB::table("municipios")->insert(["nombre" => 'Túquerres']);
			DB::table("municipios")->insert(["nombre" => 'Yacuanquer']);





			DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000255,
'nombre'=>'Escuela Rural Chuguldi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Rural',
'codigo'=>252405000325,
'nombre'=>'La Planada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000204,
'nombre'=>'Escuela Rural Bolivar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000500,
'nombre'=>'CE Los Llanos De Manchabajoy'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000041,
'nombre'=>'Rural Mixta Integrada El Paramo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000137,
'nombre'=>'CE Integrado De Colimba'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Chachagüí',
'zona'=>'Rural',
'codigo'=>252001002260,
'nombre'=>'CE Pasizara'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Chachagüí',
'zona'=>'Rural',
'codigo'=>252001002146,
'nombre'=>'CE De Sanchez'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Santacruz',
'zona'=>'Rural',
'codigo'=>252699000158,
'nombre'=>'CE Manchag'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000234,
'nombre'=>'Escuela Rural Mixta Granadillo De Lunas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Providencia',
'zona'=>'Rural',
'codigo'=>252565000038,
'nombre'=>'CE Villa Nueva'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000101,
'nombre'=>'CE Armenia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Chachagüí',
'zona'=>'Rural',
'codigo'=>252001000143,
'nombre'=>'CE El Convento'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000346,
'nombre'=>'CE Tasnaque'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Providencia',
'zona'=>'Urbana',
'codigo'=>252838000435,
'nombre'=>'Escuela Urbana De Providencia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000306,
'nombre'=>'CE Sta. Cruz'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000030,
'nombre'=>'IE Bajo Sinai'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Chachagüí',
'zona'=>'Rural',
'codigo'=>252001000496,
'nombre'=>'CE Casabuy'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Urbana',
'codigo'=>152678000188,
'nombre'=>'Escuela Urbana San Luis Gonzaga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Mallama',
'zona'=>'Rural',
'codigo'=>252435000109,
'nombre'=>'CE Chambu'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000609,
'nombre'=>'Escuela Rural Mixta El Tambor'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000108,
'nombre'=>'Escuela Rural Mixta El Rodeo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000471,
'nombre'=>'Escuela Rural Mixta Sta.nder'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000583,
'nombre'=>'CE El Arrayan De Yascual'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001839,
'nombre'=>'CE La Maria'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252019000060,
'nombre'=>'IEA La Vega'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000201,
'nombre'=>'CE La Unión'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Imués',
'zona'=>'Rural',
'codigo'=>252354000058,
'nombre'=>'CE Sta. Rosa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000186,
'nombre'=>'CE Tanguana'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000442,
'nombre'=>'IE San Jose De Matituy'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Cumbitara',
'zona'=>'Urbana',
'codigo'=>152233000048,
'nombre'=>'CE San Juan Bosco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Rural',
'codigo'=>252612000114,
'nombre'=>'CE De Palpis'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000630,
'nombre'=>'CE La Cienaga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Urbana',
'codigo'=>152788000035,
'nombre'=>'Escuela La Buena Esperanza'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000027,
'nombre'=>'Escuela Rural Mixta De Matituy'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Rural',
'codigo'=>252287000048,
'nombre'=>'CE Guapuscal Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000108,
'nombre'=>'CE Llanogrande Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000105,
'nombre'=>'CE Mixta Cumag Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000032,
'nombre'=>'Escuela Integrada De Granada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000343,
'nombre'=>'CE Sagrado Corazon De Jesus'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000199,
'nombre'=>'Escuela Integrada El Remolino'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001456,
'nombre'=>'IE Buenavista'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001502,
'nombre'=>'Centro Educativo El Sabalo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000225,
'nombre'=>'I.E. Tecnica Agropecuaria Salinas  15'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Urbana',
'codigo'=>152405000193,
'nombre'=>'C-E- Sgdo Corazon De Jesus'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'El Rosario',
'zona'=>'Urbana',
'codigo'=>152256000487,
'nombre'=>'Concentracion Escolar Santo Tomas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Chachagüí',
'zona'=>'Rural',
'codigo'=>252001003029,
'nombre'=>'CE Merlo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000025,
'nombre'=>'CE El Ejido'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Aldana',
'zona'=>'Rural',
'codigo'=>252022000046,
'nombre'=>'CE El Chorrillo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Aldana',
'zona'=>'Rural',
'codigo'=>252022000054,
'nombre'=>'CE Caupueran'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000159,
'nombre'=>'Centro Eudcativo Muesmueran Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Aldana',
'zona'=>'Urbana',
'codigo'=>152022000076,
'nombre'=>'Escuela Divino Niño'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000116,
'nombre'=>'Escuela Rural Mixta Los Arrayanes'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000272,
'nombre'=>'Escuela Rural Mixta Payan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cuaspud',
'zona'=>'Rural',
'codigo'=>252224000188,
'nombre'=>'CE Indigena Providencia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Urbana',
'codigo'=>152215000014,
'nombre'=>'Concentracion Escolar Benjamin Belalcazar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000043,
'nombre'=>'Esc Rur Mix Sta.nder'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000108,
'nombre'=>'Escuela Rural Mixta De Tequis'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Rural',
'codigo'=>252287000102,
'nombre'=>'Escuela Integrada Chapal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000153,
'nombre'=>'Escuela Integrada Muellamues'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Urbana',
'codigo'=>152317000027,
'nombre'=>'CE Niño Jesus De Praga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Urbana',
'codigo'=>152287000116,
'nombre'=>'Escuela Urbana De Varones'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Gualmatán',
'zona'=>'Rural',
'codigo'=>252323000033,
'nombre'=>'Escuela Integrada Cuatis'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Gualmatán',
'zona'=>'Rural',
'codigo'=>252323000149,
'nombre'=>'Jardin Infantil Mis Amiguitos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Gualmatán',
'zona'=>'Urbana',
'codigo'=>152323000161,
'nombre'=>'IE Tec. Promocion Socia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Iles',
'zona'=>'Urbana',
'codigo'=>152352000111,
'nombre'=>'Escuela Urbana De Niñas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Iles',
'zona'=>'Rural',
'codigo'=>252352000085,
'nombre'=>'CE San Francisco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000204,
'nombre'=>'CE San Juan Bosco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Peñol',
'zona'=>'Urbana',
'codigo'=>252260000267,
'nombre'=>'Escuela Integrada El Peñol'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000387,
'nombre'=>'Centro Educativo Maria Auxiliadora'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000047,
'nombre'=>'CE Sta. Teresa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'La Llanada',
'zona'=>'Rural',
'codigo'=>252385000120,
'nombre'=>'Escuela Integrada No. 1'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000195,
'nombre'=>'Esc Nva La Cocha'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000497,
'nombre'=>'CE Tierras Blancas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000667,
'nombre'=>'CE Las Palmas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000471,
'nombre'=>'CE La Guada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Urbana',
'codigo'=>152260000035,
'nombre'=>'Escuela La Inmaculada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000306,
'nombre'=>'CE El Empate'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Urbana',
'codigo'=>152051000395,
'nombre'=>'Esc Urb Integ Santo Tomas De Berruecos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000527,
'nombre'=>'CE El Pedregal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000071,
'nombre'=>'CE El Volador'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000187,
'nombre'=>'Esc Integ De Rosa Florida'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'Los Andes',
'zona'=>'Urbana',
'codigo'=>152418000206,
'nombre'=>'Escuela Urbana Maria Goretti'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000421,
'nombre'=>'Escuela Integrada Rosal Del Monte'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000064,
'nombre'=>'Escuela Rural Mixta Sta. Fe'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000691,
'nombre'=>'IE Ecologica La Cocha'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Urbana',
'codigo'=>152110000272,
'nombre'=>'Escuela Urbana Pio Xii'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Arboleda',
'zona'=>'Rural',
'codigo'=>252051000578,
'nombre'=>'IE Rosaflorida'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000072,
'nombre'=>'Escuela Integrada Camilo Torres'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000059,
'nombre'=>'Escuela Rural Mixta El Sauce'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Urbana',
'codigo'=>152399000518,
'nombre'=>'Escuela Urbana Sta. Teresita'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Ancuyá',
'zona'=>'Rural',
'codigo'=>252036000057,
'nombre'=>'IE Maria Auxiliadora'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Pedro De Cartago',
'zona'=>'Rural',
'codigo'=>252051000098,
'nombre'=>'CE La Estancia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Pedro De Cartago',
'zona'=>'Rural',
'codigo'=>252051000411,
'nombre'=>'CE El Salado'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Ancuyá',
'zona'=>'Rural',
'codigo'=>252036000065,
'nombre'=>'IE Yanancha'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Pedro De Cartago',
'zona'=>'Rural',
'codigo'=>252051000519,
'nombre'=>'CE Chimayoy Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Ancuyá',
'zona'=>'Urbana',
'codigo'=>152036000028,
'nombre'=>'Liceo Nuestra Sra De La Visitacion'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000055,
'nombre'=>'Escuela Rural Mixta Sta. Cecilia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Urbana',
'codigo'=>252411000175,
'nombre'=>'Escuela La Milagrosa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Urbana',
'codigo'=>252411000337,
'nombre'=>'Escuela La Merced'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000060,
'nombre'=>'Escuela Rural Integrada No 1 San Francisco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Ancuyá',
'zona'=>'Rural',
'codigo'=>252036000049,
'nombre'=>'IE La Loma'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Consacá',
'zona'=>'Rural',
'codigo'=>252207000069,
'nombre'=>'Concentracion Escolar Simon Bolivar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000035,
'nombre'=>'Escuela Rural Integrada De Tabiles'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000329,
'nombre'=>'Escuela Rural Integrada No 2 San Francisco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Ancuyá',
'zona'=>'Rural',
'codigo'=>252036000081,
'nombre'=>'IE Nuestra Sra De Las L'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Urbana',
'codigo'=>152612000012,
'nombre'=>'IE Nacional Ricaurte'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Belén',
'zona'=>'Rural',
'codigo'=>252083000154,
'nombre'=>'IE Nuestra Sra De Bele'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Albán',
'zona'=>'Rural',
'codigo'=>252019000094,
'nombre'=>'CE San Bosco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Belén',
'zona'=>'Rural',
'codigo'=>252083000201,
'nombre'=>'IEA La Esperanza'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Urbana',
'codigo'=>152683000412,
'nombre'=>'Conc Escol Santo Tomas De Aquino'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Belén',
'zona'=>'Rural',
'codigo'=>252083000014,
'nombre'=>'CE Campo De Maria'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Albán',
'zona'=>'Rural',
'codigo'=>252019000191,
'nombre'=>'CE El Guarangal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Rural',
'codigo'=>252612000998,
'nombre'=>'Escuela Rural Mixta Ospina Perez'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000047,
'nombre'=>'Esc Rur Mix Aponte'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>552258000000,
'nombre'=>'Esc Rur Mix Paramo Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Rural',
'codigo'=>252203000242,
'nombre'=>'Escuela Integrada Villanueva'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Urbana',
'codigo'=>152203000035,
'nombre'=>'Escuela Urbana De Niñas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000161,
'nombre'=>'Esc Rur Mix El Paramo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252019000353,
'nombre'=>'CE Pueblo Viejo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252019000086,
'nombre'=>'CE Tundururco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252019000124,
'nombre'=>'CE La Playa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252019000264,
'nombre'=>'CE Alto Junin'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000148,
'nombre'=>'Escuela Rural Mixta Integrada De Tajumbina'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000458,
'nombre'=>'Escuela Rural Integrada De Briceño'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Urbana',
'codigo'=>152506000020,
'nombre'=>'Escuela Urbana De Niñas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Sapuyes',
'zona'=>'Rural',
'codigo'=>252720000147,
'nombre'=>'Escuela Rural Integrada No. 2'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Urbana',
'codigo'=>152838000457,
'nombre'=>'Escuela Urbana Perpetuo Socorro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000133,
'nombre'=>'Escuela No 2 Cuatro Esquinas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>252506000041,
'nombre'=>'Escuela Rural Mixta Cunchila'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Sapuyes',
'zona'=>'Rural',
'codigo'=>252720000031,
'nombre'=>'Escuela Rural Integrada No. 1'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>252506000059,
'nombre'=>'Escuela Rural Mixta San Isidro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'El Charco',
'zona'=>'Rural',
'codigo'=>252250000315,
'nombre'=>'Colegio Rural Mixto De San Pedro De Bolivar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'El Charco',
'zona'=>'Rural',
'codigo'=>252250000340,
'nombre'=>'Colegio Basico Rural Mixto Secadero Sequihonda'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Urbana',
'codigo'=>152838001101,
'nombre'=>'Colegio Departamental Agricola De La Sabana'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'El Charco',
'zona'=>'Urbana',
'codigo'=>152250001082,
'nombre'=>'IE El Canal Nocturno Maria'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000425,
'nombre'=>'CE La Represa Inguambi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000450,
'nombre'=>'CE Guinulté'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000743,
'nombre'=>'CE San Miguel De Ñambi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000239,
'nombre'=>'CE Chalalbí'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Urbana',
'codigo'=>152079000706,
'nombre'=>'Escuela Enrique Muñoz'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000883,
'nombre'=>'IE El Diviso'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000484,
'nombre'=>'CE Naispi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000361,
'nombre'=>'CE De Diaguillo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000964,
'nombre'=>'CE.De Mongón'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000158,
'nombre'=>'CE Rapadura'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000131,
'nombre'=>'CE Palacio'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001472,
'nombre'=>'CE Cumainde Paso'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001065,
'nombre'=>'CE.Painandá'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001740,
'nombre'=>'Escuela Rural Mixta Integrada De Altaquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Olaya Herrera',
'zona'=>'Rural',
'codigo'=>152490000687,
'nombre'=>'CE Alto San Antonio'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001103,
'nombre'=>'CE R.De Pispián'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001413,
'nombre'=>'CE San Francisco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000662,
'nombre'=>'CE Villaflor'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000182,
'nombre'=>'CE Teraimbe'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Santacruz',
'zona'=>'Rural',
'codigo'=>252699000182,
'nombre'=>'CE Sta. Rosa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678001154,
'nombre'=>'IEA Simon Alva'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001367,
'nombre'=>'CE Albi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Roberto Payán',
'zona'=>'Urbana',
'codigo'=>152621000564,
'nombre'=>'Escuela Urbana Andres Bello'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000344,
'nombre'=>'CE El Llano'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000654,
'nombre'=>'IEA San Martin De Porres - Sede'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000026,
'nombre'=>'CE Puerchag'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001847,
'nombre'=>'CE Nuestra Sra De Fatima De'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000085,
'nombre'=>'CE El Salado'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000212,
'nombre'=>'CE Las Cruces'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000221,
'nombre'=>'CE Los Brazos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Roberto Payán',
'zona'=>'Urbana',
'codigo'=>152621000840,
'nombre'=>'Preescolar Alegria De Leer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001073,
'nombre'=>'CE Cucarachera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079001821,
'nombre'=>'CE Yacula'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Magüí',
'zona'=>'Urbana',
'codigo'=>252427000213,
'nombre'=>'Escuela Urbana Nuestra Sra Del Carmen'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000018,
'nombre'=>'CE Piedrablanca'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Abades',
'municipio'=>'Samaniego',
'zona'=>'Rural',
'codigo'=>252678000239,
'nombre'=>'CE El Canada Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000587,
'nombre'=>'IE Nuestra Sra Del Carm'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000249,
'nombre'=>'CE San Felipe'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000595,
'nombre'=>'IE Jose Maria Navarrete'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000447,
'nombre'=>'Escuela Rural Mixta Las Palmas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000168,
'nombre'=>'IE Nuestra Sra De Fatim'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000200,
'nombre'=>'Escuela Rural Mixta El Paramo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000086,
'nombre'=>'CE Rosapamba'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000043,
'nombre'=>'CE De Las Plazuelas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000102,
'nombre'=>'Escuela Rural Mixta Los Ajos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Cumbitara',
'zona'=>'Rural',
'codigo'=>252233000182,
'nombre'=>'CE La Esperanza'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Tangua',
'zona'=>'Rural',
'codigo'=>252788000188,
'nombre'=>'Escuela Rural Mixta Marqueza Alta'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000311,
'nombre'=>'CE Zaragoza'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000060,
'nombre'=>'Escuela Rural Mixta De Robles'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Cumbitara',
'zona'=>'Rural',
'codigo'=>252233000026,
'nombre'=>'CE El Desierto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>452381000387,
'nombre'=>'IE Gustin Sta.cruz'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000044,
'nombre'=>'CE Taindala'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'Yacuanquer',
'zona'=>'Rural',
'codigo'=>252885000079,
'nombre'=>'CE Inantas Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Centro',
'municipio'=>'La Florida',
'zona'=>'Rural',
'codigo'=>252381000451,
'nombre'=>'IE La Inmaculada De Robles'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Cumbitara',
'zona'=>'Rural',
'codigo'=>252233000425,
'nombre'=>'IE Agropecuario Sta. Rosa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000602,
'nombre'=>'IEA El Ejido'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000556,
'nombre'=>'CE La Florida'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Rural',
'codigo'=>252405000066,
'nombre'=>'CE Sta. Lucia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000121,
'nombre'=>'Centro Educ Charguayaco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000050,
'nombre'=>'CE Restrepo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000491,
'nombre'=>'Vda.Guayacanal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Rural',
'codigo'=>252405000449,
'nombre'=>'CE Sachamates'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000245,
'nombre'=>'Centro Educa Alto Don Diego'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000521,
'nombre'=>'IE Col Pedro De Adrada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000751,
'nombre'=>'IEA Altamira'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000238,
'nombre'=>'CE Las Canoas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Rural',
'codigo'=>252405000392,
'nombre'=>'San Jorge'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000564,
'nombre'=>'CE Peñas Blancas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000075,
'nombre'=>'Centro Educ La Concordia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000113,
'nombre'=>'Cent Educ Turbambilla'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Policarpa',
'zona'=>'Rural',
'codigo'=>252540000297,
'nombre'=>'CE La Toldada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000636,
'nombre'=>'CE Loma Larga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Leiva',
'zona'=>'Rural',
'codigo'=>252405000651,
'nombre'=>'IE Las Delicias'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000059,
'nombre'=>'Cent Educ Jesus De Praga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000156,
'nombre'=>'IE El Manzano'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000130,
'nombre'=>'Centro Educ Curiaco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000035,
'nombre'=>'IE Tec. Agroecologica D'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000469,
'nombre'=>'IE Sta.nder'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000221,
'nombre'=>'CE La Cumbre'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000709,
'nombre'=>'IE Tablon Panamericano'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>452215000441,
'nombre'=>'IE Nuestra Sra. De Fatima'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000138,
'nombre'=>'IE San Juan De Mayasquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000031,
'nombre'=>'CE Pueblo Viejo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000230,
'nombre'=>'CE Mirador'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Coordillera',
'municipio'=>'Taminango',
'zona'=>'Rural',
'codigo'=>252786000369,
'nombre'=>'Centro Educ San Isidro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000146,
'nombre'=>'CE De Panan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000175,
'nombre'=>'Centro Eudcativo Sta. Brigida'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000248,
'nombre'=>'CE Muesmueran Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cuaspud',
'zona'=>'Rural',
'codigo'=>252224000099,
'nombre'=>'CE Chavisnan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cuaspud',
'zona'=>'Rural',
'codigo'=>252224000064,
'nombre'=>'CE El Carchi'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Córdoba',
'zona'=>'Rural',
'codigo'=>252215000418,
'nombre'=>'Centro Educativa Yungachala'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Aldana',
'zona'=>'Rural',
'codigo'=>452022000118,
'nombre'=>'IE Comercial San Luis'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000081,
'nombre'=>'IE San Jose De Chillanquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>452227000846,
'nombre'=>'CE La Libertad'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000090,
'nombre'=>'CE Cuaspud Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Rural',
'codigo'=>252287000200,
'nombre'=>'CE La Pradera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000065,
'nombre'=>'CE Guan Centro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000197,
'nombre'=>'CE Cristo Rey'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000456,
'nombre'=>'CE Cualpala'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000464,
'nombre'=>'CE El Chilco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000366,
'nombre'=>'CE Guan Puente Alto.'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000196,
'nombre'=>'CE Ipialpud'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Rural',
'codigo'=>252287000099,
'nombre'=>'CE El Socorro Chitarran'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Funes',
'zona'=>'Rural',
'codigo'=>252287000218,
'nombre'=>'Colegio Agropecuario Mariscal Sucre'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000099,
'nombre'=>'CE La Victoria.'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000111,
'nombre'=>'CE Integrado De Chiles'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000269,
'nombre'=>'CE Arvela'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000293,
'nombre'=>'CE Chimangual'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000129,
'nombre'=>'CE El Consuelo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Cumbal',
'zona'=>'Rural',
'codigo'=>252227000863,
'nombre'=>'IE Yo Reinare Boyera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000083,
'nombre'=>'IE San Alejandro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000202,
'nombre'=>'CE Cuatro Esquinas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Iles',
'zona'=>'Rural',
'codigo'=>252352000042,
'nombre'=>'CE San Javier'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000277,
'nombre'=>'CE Riveras'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000099,
'nombre'=>'IE Indigena Sta. Teresita'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000111,
'nombre'=>'CE Chapud'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000072,
'nombre'=>'CE Cardenas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000181,
'nombre'=>'CE San Nicolas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Iles',
'zona'=>'Rural',
'codigo'=>252352000018,
'nombre'=>'CE Bolivar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000075,
'nombre'=>'CE Girardoth'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Iles',
'zona'=>'Rural',
'codigo'=>252352000204,
'nombre'=>'CE San Antonio'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Gualmatán',
'zona'=>'Rural',
'codigo'=>252323000190,
'nombre'=>'IE Tec. Santo Tomas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000285,
'nombre'=>'CE Los Alisos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000056,
'nombre'=>'CE Cualapud'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000041,
'nombre'=>'CE Ahumada Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guaitarilla',
'zona'=>'Rural',
'codigo'=>252320000121,
'nombre'=>'CE El Cid'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000277,
'nombre'=>'CE Villa Nueva'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Guachucal',
'zona'=>'Rural',
'codigo'=>252317000412,
'nombre'=>'IE Tec. Agropecuaria Indigena Libardo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000054,
'nombre'=>'IE San Pedro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Peñol',
'zona'=>'Rural',
'codigo'=>252260000691,
'nombre'=>'CE Pindopamba'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Puerres',
'zona'=>'Rural',
'codigo'=>252573000306,
'nombre'=>'CE El Escritorio'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000747,
'nombre'=>'CE Las Palmas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000251,
'nombre'=>'CE Yamuesquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000239,
'nombre'=>'CE Chires Centro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000298,
'nombre'=>'CE Pusiálquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000107,
'nombre'=>'CE Sta. Lucia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000018,
'nombre'=>'CE Chires Sur'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Puerres',
'zona'=>'Rural',
'codigo'=>252573000195,
'nombre'=>'IE San Mateo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000226,
'nombre'=>'CE Cuaspud Cuatro Esquinas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000034,
'nombre'=>'CE Imbula Chico'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Puerres',
'zona'=>'Rural',
'codigo'=>252573000292,
'nombre'=>'Centtro Educativo Cristo Obrero'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000051,
'nombre'=>'CE Inchuchala'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000585,
'nombre'=>'CE De Azogue'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Potosí',
'zona'=>'Rural',
'codigo'=>252560000056,
'nombre'=>'CE Purbuntud'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Peñol',
'zona'=>'Rural',
'codigo'=>252260000381,
'nombre'=>'CE La Toma'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Pupiales',
'zona'=>'Rural',
'codigo'=>252585000026,
'nombre'=>'CE Fuelamuesquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Ex Provincia',
'municipio'=>'Puerres',
'zona'=>'Rural',
'codigo'=>252573000209,
'nombre'=>'IE Monopamba'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'Los Andes',
'zona'=>'Rural',
'codigo'=>252418000049,
'nombre'=>'Colegio Agropecuario La Planada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000285,
'nombre'=>'IE San Antonio De Padua'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000561,
'nombre'=>'Escuela Rural Mixta La Palma'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000633,
'nombre'=>'IE Sta. Rosa De Lima'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000218,
'nombre'=>'Escuela Rural Mixta Juanambu'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000137,
'nombre'=>'Escuela Rural Mixta Palacinoy'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000102,
'nombre'=>'Escuela Rural Mixta San Juan Bosco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000170,
'nombre'=>'Escuela Rural Mixta San Felipe De Higuerones'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000498,
'nombre'=>'Escuela Rural Mixta Meneses'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000323,
'nombre'=>'Escuela Rural Mixta El Naranjal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000358,
'nombre'=>'Escuela Rural Mixta Ortega Los Corrales'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'El Tambo',
'zona'=>'Rural',
'codigo'=>252260000160,
'nombre'=>'CE La Ovejera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000391,
'nombre'=>'Escuela Rural Mixta Sumapaz'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'Los Andes',
'zona'=>'Rural',
'codigo'=>252418000219,
'nombre'=>'IE Técnica Comercial Pangús - Sede Principa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000374,
'nombre'=>'Escuela Rurla Mixta Franco Villa La Loma'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'Los Andes',
'zona'=>'Rural',
'codigo'=>252418000065,
'nombre'=>'CE La Loma'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000081,
'nombre'=>'IE San Ignacio - Sede Principal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000773,
'nombre'=>'IE Sta. Maria'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Guambuyaco',
'municipio'=>'Los Andes',
'zona'=>'Rural',
'codigo'=>252418000154,
'nombre'=>'IE La Paz'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000113,
'nombre'=>'IE De Desarrollo Rural'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000838,
'nombre'=>'IE Villamoreno'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000768,
'nombre'=>'CE Villa María'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000016,
'nombre'=>'IE Sta.nder'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000164,
'nombre'=>'CE Chilcal Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000024,
'nombre'=>'CE Quiroz Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000684,
'nombre'=>'Escuela Rura Mixta El Jardin San Miguel'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000245,
'nombre'=>'CE La Alpujarra'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000296,
'nombre'=>'CE La Pradera A'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>452110000861,
'nombre'=>'IE Jubanguana'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'Buesaco',
'zona'=>'Rural',
'codigo'=>252110000617,
'nombre'=>'Escuela Rura Mixta La Represa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000181,
'nombre'=>'CE La Playa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000261,
'nombre'=>'CE Reyes'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000326,
'nombre'=>'CE Contadero'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000571,
'nombre'=>'CE Sta. Teresita'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000318,
'nombre'=>'CE Los Olivos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000156,
'nombre'=>'CE La Cañada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'La Unión',
'zona'=>'Rural',
'codigo'=>252399000504,
'nombre'=>'CE Quiroz Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000136,
'nombre'=>'CE El Guabo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000582,
'nombre'=>'Colegio San Francisco De Asis'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Consacá',
'zona'=>'Rural',
'codigo'=>252207000077,
'nombre'=>'CE El Guabo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000420,
'nombre'=>'CE Los Pinos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000608,
'nombre'=>'CE El Yunga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000144,
'nombre'=>'CE Madroñero'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000641,
'nombre'=>'CE Valparaiso Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Consacá',
'zona'=>'Rural',
'codigo'=>252207000018,
'nombre'=>'IE De Desarrollo Rural'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000667,
'nombre'=>'CE El Chepe'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000691,
'nombre'=>'CE Bellavista'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000388,
'nombre'=>'CE Tambillo De Bravos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000675,
'nombre'=>'CE El Pedregal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Consacá',
'zona'=>'Rural',
'codigo'=>252207000263,
'nombre'=>'CE El Tejar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000241,
'nombre'=>'CE La Rejoya'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000233,
'nombre'=>'CE San Pablo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000365,
'nombre'=>'CE San Vicente'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Consacá',
'zona'=>'Rural',
'codigo'=>252207000131,
'nombre'=>'CE Churupamba'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000209,
'nombre'=>'CE Las Vegas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000900,
'nombre'=>'IETA Sta. Cecilia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Juanambu',
'municipio'=>'San Lorenzo',
'zona'=>'Rural',
'codigo'=>252687000314,
'nombre'=>'CE La Estancia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000085,
'nombre'=>'IE Jesus De Praga'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000042,
'nombre'=>'Cent Educ El Tambillo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Mallama',
'zona'=>'Rural',
'codigo'=>252435000125,
'nombre'=>'CE El Guabo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Rural',
'codigo'=>252612000637,
'nombre'=>'CE Mongon'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000140,
'nombre'=>'Cent Educ San Miguel'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000549,
'nombre'=>'Cent. Educ. La Feliciana'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000604,
'nombre'=>'CE Cristo Rey'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000027,
'nombre'=>'CE El Pacual'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Mallama',
'zona'=>'Rural',
'codigo'=>252435000036,
'nombre'=>'CE Chucunes'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Rural',
'codigo'=>452612000806,
'nombre'=>'Inst Agrop Comun Ind Inkai -Awa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Mallama',
'zona'=>'Rural',
'codigo'=>252435000087,
'nombre'=>'Cento Educativo Curcuel'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000492,
'nombre'=>'Cent Educ San Francisco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Ricaurte',
'zona'=>'Rural',
'codigo'=>252612000106,
'nombre'=>'CE San Pablo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000565,
'nombre'=>'IE Sgdo Corazon De Jesus'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Linares',
'zona'=>'Rural',
'codigo'=>252411000141,
'nombre'=>'CE Bella Vista'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000531,
'nombre'=>'IE Col Simon Boivar'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Pie De Monte Costero',
'municipio'=>'Mallama',
'zona'=>'Rural',
'codigo'=>252435000320,
'nombre'=>'IEA San Juan B'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Occidente',
'municipio'=>'Sandoná',
'zona'=>'Rural',
'codigo'=>252683000093,
'nombre'=>'Cent Educ San Bernardo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Urbana',
'codigo'=>352203000018,
'nombre'=>'Colegio Leopoldo Lopez Alvarez'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000179,
'nombre'=>'IE Rural La Victoria'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Rural',
'codigo'=>252203000374,
'nombre'=>'Colegio Municipal Nuestra Sra Del Rosario'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000454,
'nombre'=>'Centro Educ Los Alpes'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Bernardo',
'zona'=>'Rural',
'codigo'=>252685000015,
'nombre'=>'CE Mirador La Playa'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000071,
'nombre'=>'CE Pitalito Bajo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Rural',
'codigo'=>252203000226,
'nombre'=>'CE Buesaco'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000083,
'nombre'=>'IE Microempresarial De Ca'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'Colón',
'zona'=>'Rural',
'codigo'=>252203000099,
'nombre'=>'CE Bordo Alto'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000547,
'nombre'=>'CE Llano Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000130,
'nombre'=>'CE La Estancia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000101,
'nombre'=>'Centro Educ Pompeya'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000750,
'nombre'=>'IEA Miguel Angel Rangel'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000039,
'nombre'=>'Centro Educ La Cueva'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000156,
'nombre'=>'CE Cofradia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'La Cruz',
'zona'=>'Rural',
'codigo'=>252378000067,
'nombre'=>'IE Telesecundaria De San G'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000411,
'nombre'=>'Centro Educ Gavilla Alta'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000292,
'nombre'=>'Centro Educ Maria Inmaculada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'El Tablón',
'zona'=>'Rural',
'codigo'=>252258000390,
'nombre'=>'IEA Inga De Aponte'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Imués',
'zona'=>'Rural',
'codigo'=>252354000341,
'nombre'=>'IEA Sta. Ana'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Sapuyes',
'zona'=>'Rural',
'codigo'=>252720000074,
'nombre'=>'IEA La Florest'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000148,
'nombre'=>'CE Aguadas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>452506000180,
'nombre'=>'IE San Isidro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000181,
'nombre'=>'CE El Mesón'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>252506000113,
'nombre'=>'CE La Florida'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Imués',
'zona'=>'Rural',
'codigo'=>252354000015,
'nombre'=>'CE Pilcuan Viejo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000261,
'nombre'=>'CE Francia'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000270,
'nombre'=>'CE Los Llanos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>252506000199,
'nombre'=>'IE Cunchila'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000342,
'nombre'=>'CE Alto Llano'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000580,
'nombre'=>'Colegio Tec. Municipal Manuel Briceño'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Ospina',
'zona'=>'Rural',
'codigo'=>252506000091,
'nombre'=>'CE San Pedro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Sapuyes',
'zona'=>'Rural',
'codigo'=>252720000163,
'nombre'=>'CE Panamal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000318,
'nombre'=>'CE Campo Bello'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Imués',
'zona'=>'Rural',
'codigo'=>252354000112,
'nombre'=>'CE El Portachuelo'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000032,
'nombre'=>'CE El Chilcal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Rio Mayo',
'municipio'=>'San Pablo',
'zona'=>'Rural',
'codigo'=>252693000041,
'nombre'=>'CE La Chorrera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Imués',
'zona'=>'Rural',
'codigo'=>252354000066,
'nombre'=>'CE San Isidro'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000541,
'nombre'=>'CE La Jardinera'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838001253,
'nombre'=>'Colegio Municipal Cuatro Esquinas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838001041,
'nombre'=>'CE San Jose De Alpan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000419,
'nombre'=>'CE Rancho Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000117,
'nombre'=>'IEA Polachayan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000915,
'nombre'=>'CE Sta. Cecila Panamal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000796,
'nombre'=>'CE Buenavista'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000079,
'nombre'=>'IE Colegio Municipal De Ol'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000371,
'nombre'=>'CE Los Arrayanes'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000346,
'nombre'=>'CE Esnambud'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000567,
'nombre'=>'CE La Ensillada'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838001024,
'nombre'=>'CE De Nangan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000354,
'nombre'=>'CE La Guayaquila'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000460,
'nombre'=>'CE De Pinzon'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000737,
'nombre'=>'CE San Carlos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838001172,
'nombre'=>'CE Guanguezan'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000320,
'nombre'=>'CE Pueranquer'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838001091,
'nombre'=>'CE Dos Quebradas'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Santa Bárbara',
'zona'=>'Rural',
'codigo'=>252696000637,
'nombre'=>'CE Boca De Chanzara'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000702,
'nombre'=>'CE Alpan Potrerillos'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Santa Bárbara',
'zona'=>'Rural',
'codigo'=>252696000807,
'nombre'=>'CE La Piedra'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000095,
'nombre'=>'CE Quebrada Oscura'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sabana',
'municipio'=>'Túquerres',
'zona'=>'Rural',
'codigo'=>252838000087,
'nombre'=>'CE Guanama Grande'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Olaya Herrera',
'zona'=>'Rural',
'codigo'=>252490000266,
'nombre'=>'IE Las Marias - Sede Principal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Mosquera',
'zona'=>'Rural',
'codigo'=>252473000953,
'nombre'=>'CE El Bajito'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Olaya Herrera',
'zona'=>'Rural',
'codigo'=>252490001220,
'nombre'=>'IE San Jose Calabazal'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Sanquianga',
'municipio'=>'Olaya Herrera',
'zona'=>'Rural',
'codigo'=>252490000029,
'nombre'=>'CE El Carmen'
] );
			
DB::table("establecimientos_educativos")->insert( [
'region'=>'Telembi',
'municipio'=>'Barbacoas',
'zona'=>'Rural',
'codigo'=>252079000905,
'nombre'=>'CE Berlin'
] );











    }
}
