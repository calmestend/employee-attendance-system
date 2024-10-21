<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create(['name' => 'Student']);
        Role::create(['name' => 'Teacher']);
        Role::create(['name' => 'Admin']);

        Classroom::create(['name' => 'T221']);

        Course::create(['name' => 'AWOS']);

        User::factory()->create([
            'name' => 'Student',
            'email' => 'student@example.com',
            'password' => bcrypt('student@example.com'),
            'role_id' => 1
        ]);

        User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
            'password' => bcrypt('teacher@example.com'),
            'role_id' => 2
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin@example.com'),
            'role_id' => 3
        ]);

        Student::create([
            'user_id' => 1,
            'classroom_id' => 1,
        ]);

        Teacher::create([
            'user_id' => 2,
            'course_id' => 1,
        ]);

        Admin::create([
            'user_id' => 3,
        ]);
    }
}
