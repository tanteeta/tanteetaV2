<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Icode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        CREATE TABLE `courses` (
		  `id` int(11) NOT NULL,
		  `type_id` int(11) NOT NULL,
		  `title` char(50) NOT NULL,
		  `cover_image` varchar(150) NOT NULL,
		  `thumbnail` varchar(150) NOT NULL,
		  `description` text NOT NULL,
		  `curriculum` varchar(100) DEFAULT NULL,
		  `duration` int(4) NOT NULL,
		  `create_at` datetime(6) NOT NULL,
		  `updated_at` datetime(6) DEFAULT CURRENT_TIMESTAMP
		) ;


		// Table structure for table `course_categories`
		

		CREATE TABLE `course_categories` (
		  `id` int(11) NOT NULL,
		  `name` char(50) NOT NULL,
		  `create_at` datetime(6) NOT NULL,
		  `updated_at` datetime(6) DEFAULT CURRENT_TIMESTAMP
		) ;

		// Table structure for table `course_types`

		CREATE TABLE `course_types` (
		  `id` int(11) NOT NULL,
		  `name` char(12) NOT NULL,
		  `create_at` datetime(6) NOT NULL,
		  `updated_at` datetime(6) DEFAULT CURRENT_TIMESTAMP
		) ;


		// Table structure for table `students`

		CREATE TABLE `students` (
		  `id` int(11) NOT NULL,
		  `user_id` int(11) NOT NULL,
		  `course_id` int(11) NOT NULL,
		  `tutor_id` int(11) NOT NULL,
		  `weekly_duration` int(2) NOT NULL,
		  `days` char(15) NOT NULL,
		  `time` time(6) NOT NULL,
		  `start_date` date NOT NULL,
		  `end_date` date NOT NULL,
		  `status` tinyint(1) NOT NULL,
		  `assigned` tinyint(1) NOT NULL,
		  `created_at` datetime(6) NOT NULL,
		  `updated_at` datetime(6) DEFAULT CURRENT_TIMESTAMP
		) ;


		// Table structure for table `tutors`
		

		CREATE TABLE `tutors` (
		  `id` int(11) NOT NULL,
		  `user_id` int(11) NOT NULL,
		  `course_id` int(11) NOT NULL,
		  `created_at` datetime(6) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;


		// Table structure for table `users`
		

		CREATE TABLE `users` (
		  `id` int(11) NOT NULL,
		  `first_name` char(50) NOT NULL,
		  `last_name` char(50) NOT NULL,
		  `image` varchar(150) NOT NULL,
		  `street_address` varchar(150) NOT NULL,
		  `city` varchar(20) NOT NULL,
		  `state` varchar(20) NOT NULL,
		  `phone` int(12) NOT NULL,
		  `email` varchar(100) NOT NULL,
		  `gender` char(6) DEFAULT NULL,
		  `password` varchar(64) NOT NULL,
		  `password_salt` varbinary(20) NOT NULL,
		  `created_at` datetime(6) NOT NULL,
		  `updated_at` datetime(6) DEFAULT CURRENT_TIMESTAMP
		) ;

		
		// Indexes for dumped tables
		
		// Indexes for table `tutors`
		
		ALTER TABLE `tutors`
		  ADD PRIMARY KEY (`id`),
		  ADD KEY `user_id` (`user_id`),
		  ADD KEY `course_id` (`course_id`);

		
		// AUTO_INCREMENT for dumped tables
		

		
		// AUTO_INCREMENT for table `courses`
		
		ALTER TABLE `courses`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		// AUTO_INCREMENT for table `course_categories`
		
		ALTER TABLE `course_categories`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		// AUTO_INCREMENT for table `course_types`
		
		ALTER TABLE `course_types`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		// AUTO_INCREMENT for table `students`
		
		ALTER TABLE `students`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		//AUTO_INCREMENT for table `tutors`
		
		ALTER TABLE `tutors`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		// AUTO_INCREMENT for table `users`
		
		ALTER TABLE `users`
		  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
		
		// Constraints for dumped tables
		
		
		// Constraints for table `tutors`
		
		ALTER TABLE `tutors`
		  ADD CONSTRAINT `tutors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
		  ADD CONSTRAINT `tutors_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

		/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
		/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
		/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
