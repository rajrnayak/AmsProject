-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 09:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_id` bigint(20) UNSIGNED NOT NULL,
  `Course_Department_id` bigint(20) UNSIGNED NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_id`, `Course_Department_id`, `Course_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'MCA', '2023-09-04 11:56:25', '2023-09-04 11:56:25'),
(2, 1, 'BCA', '2023-09-04 11:56:32', '2023-09-04 11:56:32'),
(3, 2, 'MBA', '2023-09-04 11:56:42', '2023-09-04 11:56:42'),
(4, 2, 'BBA', '2023-09-04 11:56:50', '2023-09-04 11:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Department_id` bigint(20) UNSIGNED NOT NULL,
  `Department_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Department_id`, `Department_name`, `created_at`, `updated_at`) VALUES
(1, 'computer application', '2023-09-04 11:56:10', '2023-09-04 11:56:10'),
(2, 'commerce', '2023-09-04 11:56:17', '2023-09-04 11:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `Division_id` bigint(20) UNSIGNED NOT NULL,
  `Division_Department_id` bigint(20) UNSIGNED NOT NULL,
  `Division_Course_id` bigint(20) UNSIGNED NOT NULL,
  `Division_Semester_id` bigint(20) UNSIGNED NOT NULL,
  `Division_character` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`Division_id`, `Division_Department_id`, `Division_Course_id`, `Division_Semester_id`, `Division_character`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'A', '2023-09-04 12:11:44', '2023-09-04 12:11:44'),
(2, 2, 4, 2, 'B', '2023-09-04 12:16:28', '2023-09-05 00:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `Faculty_id` bigint(20) UNSIGNED NOT NULL,
  `Faculty_User_id` bigint(20) UNSIGNED NOT NULL,
  `Faculty_Department_id` bigint(20) UNSIGNED NOT NULL,
  `Faculty_Course_id` bigint(20) UNSIGNED NOT NULL,
  `Faculty_username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`Faculty_id`, `Faculty_User_id`, `Faculty_Department_id`, `Faculty_Course_id`, `Faculty_username`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 2, 'vivek', '2023-09-05 00:55:06', '2023-09-05 00:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_24_191609_create_departments_table', 1),
(7, '2023_08_26_101331_create_courses_table', 1),
(8, '2023_08_31_181046_create_facultys_table', 1),
(9, '2023_09_02_144419_create_semesters_table', 1),
(10, '2023_09_04_171056_create_divisions_table', 1),
(11, '2023_09_05_082841_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `Semester_id` bigint(20) UNSIGNED NOT NULL,
  `Semester_Department_id` bigint(20) UNSIGNED NOT NULL,
  `Semester_Course_id` bigint(20) UNSIGNED NOT NULL,
  `Semester_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`Semester_id`, `Semester_Department_id`, `Semester_Course_id`, `Semester_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2023-09-04 11:57:01', '2023-09-04 11:57:01'),
(2, 2, 4, '2', '2023-09-04 11:57:10', '2023-09-04 11:57:10'),
(3, 1, 1, '2', '2023-09-05 05:02:31', '2023-09-05 05:02:31'),
(4, 2, 4, '1', '2023-09-05 06:03:38', '2023-09-05 06:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_id` bigint(20) UNSIGNED NOT NULL,
  `Student_User_id` bigint(20) UNSIGNED NOT NULL,
  `Student_Department_id` bigint(20) UNSIGNED NOT NULL,
  `Student_Course_id` bigint(20) UNSIGNED NOT NULL,
  `Student_Semester_id` bigint(20) UNSIGNED NOT NULL,
  `Student_Division_id` bigint(20) UNSIGNED NOT NULL,
  `Student_username` varchar(255) NOT NULL,
  `Student_rollnumber` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_id`, `Student_User_id`, `Student_Department_id`, `Student_Course_id`, `Student_Semester_id`, `Student_Division_id`, `Student_username`, `Student_rollnumber`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 4, 2, 2, 'raj', 25, '2023-09-05 05:21:39', '2023-09-05 06:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'student@abc.com', NULL, '$2y$10$SV1y.EMGLr0jTlw.Frz4FuMxhauAnyzflt3Pd.BkhebPsuwEEcZzC', 0, NULL, '2023-09-04 11:55:03', '2023-09-04 11:55:03'),
(2, 'faculty@abc.com', NULL, '$2y$10$2hS49VOi8Eh4vt9fRC/hJus/fvbkWeJi21x49f8frUgEBvUzeZXei', 1, NULL, '2023-09-04 11:55:03', '2023-09-04 11:55:03'),
(3, 'admin@abc.com', NULL, '$2y$10$mT0CM7IpTGF/8RG1TgBS.OLKCYP4spCc41hRxVOTK9HiDwhr4El.G', 2, NULL, '2023-09-04 11:55:03', '2023-09-04 11:55:03'),
(4, 'vivek@abc.com', NULL, '$2y$10$9QH2dXcKET0iLDlAXDE16uhILTPC.cZLceIdynnGMlEso0ugJUdcO', 1, NULL, '2023-09-05 00:55:06', '2023-09-05 00:55:27'),
(6, 'raj@abc.com', NULL, '$2y$10$FPwzaKNY2H8izCJWvSiYAuKrMEWtPaw1CNq9Jg2AqLkcF1vctaZOW', 0, NULL, '2023-09-05 05:21:38', '2023-09-05 06:17:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_id`),
  ADD KEY `courses_course_department_id_foreign` (`Course_Department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Department_id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`Department_name`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`Division_id`),
  ADD KEY `divisions_division_department_id_foreign` (`Division_Department_id`),
  ADD KEY `divisions_division_course_id_foreign` (`Division_Course_id`),
  ADD KEY `divisions_division_semester_id_foreign` (`Division_Semester_id`);

--
-- Indexes for table `facultys`
--
ALTER TABLE `facultys`
  ADD PRIMARY KEY (`Faculty_id`),
  ADD KEY `facultys_faculty_user_id_foreign` (`Faculty_User_id`),
  ADD KEY `facultys_faculty_department_id_foreign` (`Faculty_Department_id`),
  ADD KEY `facultys_faculty_course_id_foreign` (`Faculty_Course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`Semester_id`),
  ADD KEY `semesters_semester_department_id_foreign` (`Semester_Department_id`),
  ADD KEY `semesters_semester_course_id_foreign` (`Semester_Course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `students_student_user_id_foreign` (`Student_User_id`),
  ADD KEY `students_student_department_id_foreign` (`Student_Department_id`),
  ADD KEY `students_student_course_id_foreign` (`Student_Course_id`),
  ADD KEY `students_student_semester_id_foreign` (`Student_Semester_id`),
  ADD KEY `students_student_division_id_foreign` (`Student_Division_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `Division_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facultys`
--
ALTER TABLE `facultys`
  MODIFY `Faculty_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `Semester_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_course_department_id_foreign` FOREIGN KEY (`Course_Department_id`) REFERENCES `departments` (`Department_id`);

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_division_course_id_foreign` FOREIGN KEY (`Division_Course_id`) REFERENCES `courses` (`Course_id`),
  ADD CONSTRAINT `divisions_division_department_id_foreign` FOREIGN KEY (`Division_Department_id`) REFERENCES `departments` (`Department_id`),
  ADD CONSTRAINT `divisions_division_semester_id_foreign` FOREIGN KEY (`Division_Semester_id`) REFERENCES `semesters` (`Semester_id`);

--
-- Constraints for table `facultys`
--
ALTER TABLE `facultys`
  ADD CONSTRAINT `facultys_faculty_course_id_foreign` FOREIGN KEY (`Faculty_Course_id`) REFERENCES `courses` (`Course_id`),
  ADD CONSTRAINT `facultys_faculty_department_id_foreign` FOREIGN KEY (`Faculty_Department_id`) REFERENCES `departments` (`Department_id`),
  ADD CONSTRAINT `facultys_faculty_user_id_foreign` FOREIGN KEY (`Faculty_User_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_semester_course_id_foreign` FOREIGN KEY (`Semester_Course_id`) REFERENCES `courses` (`Course_id`),
  ADD CONSTRAINT `semesters_semester_department_id_foreign` FOREIGN KEY (`Semester_Department_id`) REFERENCES `departments` (`Department_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_student_course_id_foreign` FOREIGN KEY (`Student_Course_id`) REFERENCES `courses` (`Course_id`),
  ADD CONSTRAINT `students_student_department_id_foreign` FOREIGN KEY (`Student_Department_id`) REFERENCES `departments` (`Department_id`),
  ADD CONSTRAINT `students_student_division_id_foreign` FOREIGN KEY (`Student_Division_id`) REFERENCES `divisions` (`Division_id`),
  ADD CONSTRAINT `students_student_semester_id_foreign` FOREIGN KEY (`Student_Semester_id`) REFERENCES `semesters` (`Semester_id`),
  ADD CONSTRAINT `students_student_user_id_foreign` FOREIGN KEY (`Student_User_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
