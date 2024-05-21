/*
 Navicat Premium Data Transfer

 Source Server         : rent
 Source Server Type    : SQLite
 Source Server Version : 3030001
 Source Schema         : main

 Target Server Type    : SQLite
 Target Server Version : 3030001
 File Encoding         : 65001

 Date: 21/05/2024 16:40:26
*/

PRAGMA foreign_keys = false;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS "cache";
CREATE TABLE "cache" (
  "key" varchar NOT NULL,
  "value" text NOT NULL,
  "expiration" integer NOT NULL,
  PRIMARY KEY ("key")
);

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS "cache_locks";
CREATE TABLE "cache_locks" (
  "key" varchar NOT NULL,
  "owner" varchar NOT NULL,
  "expiration" integer NOT NULL,
  PRIMARY KEY ("key")
);

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS "failed_jobs";
CREATE TABLE "failed_jobs" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "uuid" varchar NOT NULL,
  "connection" text NOT NULL,
  "queue" text NOT NULL,
  "payload" text NOT NULL,
  "exception" text NOT NULL,
  "failed_at" datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS "job_batches";
CREATE TABLE "job_batches" (
  "id" varchar NOT NULL,
  "name" varchar NOT NULL,
  "total_jobs" integer NOT NULL,
  "pending_jobs" integer NOT NULL,
  "failed_jobs" integer NOT NULL,
  "failed_job_ids" text NOT NULL,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer NOT NULL,
  "finished_at" integer,
  PRIMARY KEY ("id")
);

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS "jobs";
CREATE TABLE "jobs" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "queue" varchar NOT NULL,
  "payload" text NOT NULL,
  "attempts" integer NOT NULL,
  "reserved_at" integer,
  "available_at" integer NOT NULL,
  "created_at" integer NOT NULL
);

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS "menus";
CREATE TABLE "menus" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar NOT NULL,
  "slug" varchar NOT NULL,
  "enabled" tinyint(1) NOT NULL DEFAULT '1',
  "order" integer,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO "menus" VALUES (1, 'Solutions', 'solutions', 1, 1, NULL, NULL);
INSERT INTO "menus" VALUES (2, 'Resources', 'resources', 1, 2, NULL, NULL);
INSERT INTO "menus" VALUES (3, 'Company', 'company', 0, 3, NULL, NULL);
INSERT INTO "menus" VALUES (4, 'Contact Us', 'contact-us', 1, 4, NULL, NULL);
INSERT INTO "menus" VALUES (5, 'Privacy Policy', 'privacy-policy', 0, 5, NULL, NULL);
INSERT INTO "menus" VALUES (6, 'Terms of Use', 'terms-of-use', 0, 6, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "migrations";
CREATE TABLE "migrations" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "migration" varchar NOT NULL,
  "batch" integer NOT NULL
);

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "migrations" VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO "migrations" VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO "migrations" VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO "migrations" VALUES (4, '2024_04_09_141631_create_menus_table', 1);
INSERT INTO "migrations" VALUES (5, '2024_04_09_141709_create_pages_table', 1);
INSERT INTO "migrations" VALUES (6, '2024_04_09_141748_create_solutions_table', 1);
INSERT INTO "migrations" VALUES (7, '2024_04_14_154403_create_portfolios_table', 1);
INSERT INTO "migrations" VALUES (8, '2024_04_24_114818_create_sliders_table', 1);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS "pages";
CREATE TABLE "pages" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar NOT NULL,
  "slug" varchar NOT NULL,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of pages
-- ----------------------------

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS "password_reset_tokens";
CREATE TABLE "password_reset_tokens" (
  "email" varchar NOT NULL,
  "token" varchar NOT NULL,
  "created_at" datetime,
  PRIMARY KEY ("email")
);

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for portfolios
-- ----------------------------
DROP TABLE IF EXISTS "portfolios";
CREATE TABLE "portfolios" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "logo" varchar NOT NULL,
  "title" varchar NOT NULL,
  "description" varchar NOT NULL,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of portfolios
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS "sessions";
CREATE TABLE "sessions" (
  "id" varchar NOT NULL,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text NOT NULL,
  "last_activity" integer NOT NULL,
  PRIMARY KEY ("id")
);

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO "sessions" VALUES ('xOUfV6yjhCU0cZe7ncTn26hrFU4EH3m0se2TOIPL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmJWempYMjFFRUFCWTFnUXM4WDNwZ2pDNUlqanI4bGUyZk8zV3U2OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714080932);
INSERT INTO "sessions" VALUES ('fjEMRMtywXYc4fLJTAhK1BcNHByzKPlc1YiUBwz6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0FVMkNodDJQeHFXTmdNRU11SUxRS25VQTczUjU5SDZoa0EwSXlDNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZXNvdXJjZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714086740);
INSERT INTO "sessions" VALUES ('dsOSZHfTsPd00f6Lkn44fOVqhCNd01O1ZIZMFH47', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVZ6SkdvMVpIcmVha0M5eTRhTk1YSUo1QlpTQm1JTFFhcjNHZG1JVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714080945);

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS "sliders";
CREATE TABLE "sliders" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar NOT NULL,
  "description" varchar,
  "image" varchar,
  "have_buttons" tinyint(1) NOT NULL DEFAULT '0',
  "enabled" tinyint(1) NOT NULL DEFAULT '1',
  "order" integer,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO "sliders" VALUES (1, 'Power Over 
Your Make Ready Process', 'With Rent Ready, we offer multifamily owners and operators the ability to streamline and monitor make ready progress, automate vendor scheduling, outsource service delivery, and oversee quality control — all from one centralized platform', '/storage/assets/img/Frame_2856.png', 0, 1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for solutions
-- ----------------------------
DROP TABLE IF EXISTS "solutions";
CREATE TABLE "solutions" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar NOT NULL,
  "slug" varchar NOT NULL,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of solutions
-- ----------------------------

-- ----------------------------
-- Table structure for sqlite_sequence
-- ----------------------------
DROP TABLE IF EXISTS "sqlite_sequence";
CREATE TABLE "sqlite_sequence" (
  "name",
  "seq"
);

-- ----------------------------
-- Records of sqlite_sequence
-- ----------------------------
INSERT INTO "sqlite_sequence" VALUES ('migrations', 8);
INSERT INTO "sqlite_sequence" VALUES ('users', 1);
INSERT INTO "sqlite_sequence" VALUES ('menus', 6);
INSERT INTO "sqlite_sequence" VALUES ('sliders', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "users";
CREATE TABLE "users" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "name" varchar NOT NULL,
  "email" varchar NOT NULL,
  "email_verified_at" datetime,
  "password" varchar NOT NULL,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "users" VALUES (1, 'Test User', 'test@example.com', '2024-04-25 09:15:54', '$2y$12$hH1xVlHBeNfXTSOlKTkccO2WMUw0KPxSc8c9U4WShlSv/Ug.NpNZK', '2kJOfTCNky', '2024-04-25 09:15:55', '2024-04-25 09:15:55');

-- ----------------------------
-- Indexes structure for table failed_jobs
-- ----------------------------
CREATE UNIQUE INDEX "failed_jobs_uuid_unique"
ON "failed_jobs" (
  "uuid" ASC
);

-- ----------------------------
-- Indexes structure for table jobs
-- ----------------------------
CREATE INDEX "jobs_queue_index"
ON "jobs" (
  "queue" ASC
);

-- ----------------------------
-- Auto increment value for menus
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 6 WHERE name = 'menus';

-- ----------------------------
-- Auto increment value for migrations
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 8 WHERE name = 'migrations';

-- ----------------------------
-- Indexes structure for table sessions
-- ----------------------------
CREATE INDEX "sessions_last_activity_index"
ON "sessions" (
  "last_activity" ASC
);
CREATE INDEX "sessions_user_id_index"
ON "sessions" (
  "user_id" ASC
);

-- ----------------------------
-- Auto increment value for sliders
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 1 WHERE name = 'sliders';

-- ----------------------------
-- Auto increment value for users
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 1 WHERE name = 'users';

-- ----------------------------
-- Indexes structure for table users
-- ----------------------------
CREATE UNIQUE INDEX "users_email_unique"
ON "users" (
  "email" ASC
);

PRAGMA foreign_keys = true;
