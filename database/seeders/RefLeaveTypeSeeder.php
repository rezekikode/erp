<?php

namespace Database\Seeders;

use App\Models\RefLeaveType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefLeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leaveTypes = [
            ['leave_name' => 'Annual Leave'],
            ['leave_name' => 'Sick Leave'],
            ['leave_name' => 'Maternity Leave'],
            ['leave_name' => 'Paternity Leave'],
            ['leave_name' => 'Marriage Leave'],
            ['leave_name' => 'Compassionate Leave'],
            ['leave_name' => 'Unpaid Leave'],
        ];

        foreach ($leaveTypes as $leaveType) {
            RefLeaveType::create($leaveType);
        }
    }
}
