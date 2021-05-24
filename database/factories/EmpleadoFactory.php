<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Idioma;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estudios = ["ESO", "BACH", "Ciclo Medio", "Ciclo Superior", "Universidad"];
        $idiomas =['Castellano','Francés', 'Alemán', 'Inglès', 'Catalán', 'Gallego', 'Vasco',
                        'Portugués', 'Rumano', 'Árabe', 'Checo', 'Polaco'
                    ];
    return [
        "nombre"=>$this->faker->name(),
        "direccion"=>$this->faker->address(),
        "telefono"=>$this->faker->phoneNumber(),
        "estudios"=>$this->faker->randomElement($estudios),
        "idiomas"=>$this->faker->randomElement($idiomas)
        ];
    }
}
