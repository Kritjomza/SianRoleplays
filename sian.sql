CREATE DATABASE IF NOT EXISTS sian CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE sian;

-- 1. ตารางผู้ใช้ (login ผ่าน Discord)
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL, -- discord_id
  discord_tag VARCHAR(255),
  avatar VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- 2. กระเป๋าสตางค์ผู้ใช้
CREATE TABLE IF NOT EXISTS wallets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  balance DECIMAL(10, 2) DEFAULT 0.00,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 3. รางวัลที่สามารถซื้อสุ่มได้
CREATE TABLE IF NOT EXISTS rewards (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  total_sp INT DEFAULT 0,
  price DECIMAL(10, 2) DEFAULT 0.00,
  image VARCHAR(255),
  is_done TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. โค้ด Redeem สำหรับแต่ละรางวัล (admin กรอกไว้ล่วงหน้า)
CREATE TABLE IF NOT EXISTS redeem_codes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  reward_id INT NOT NULL,
  code VARCHAR(255) NOT NULL UNIQUE,
  is_claimed TINYINT(1) DEFAULT 0,
  claimed_by INT,
  claimed_at DATETIME,
  FOREIGN KEY (reward_id) REFERENCES rewards(id) ON DELETE CASCADE,
  FOREIGN KEY (claimed_by) REFERENCES users(id) ON DELETE SET NULL
);

-- 5. ประวัติการซื้อ/สุ่มโค้ด
CREATE TABLE IF NOT EXISTS purchases (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  reward_id INT NOT NULL,
  code_id INT,
  amount DECIMAL(10,2) NOT NULL,
  purchased_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (reward_id) REFERENCES rewards(id) ON DELETE CASCADE,
  FOREIGN KEY (code_id) REFERENCES redeem_codes(id) ON DELETE SET NULL
);

-- 6. ประวัติการเติมเงิน
CREATE TABLE IF NOT EXISTS topups (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  slip_image VARCHAR(255),
  amount DECIMAL(10,2) NOT NULL,
  status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
  verified_at DATETIME,
  ref_code VARCHAR(100),
  bank_account VARCHAR(100),
  transferred_at DATETIME,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 7. ผู้ดูแลระบบ (admin backend login)
CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'superadmin') DEFAULT 'admin',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- ผู้ดูแลระบบ
-- Username : admin 
-- Password : 1234
INSERT INTO admins (username, password, role) VALUES 
('Sianlnwza007', '$2y$10$MxEMgPgYsV78DmEoRTeIZO1AChrcLX/8DAt8u4r1hDgSE5p0Oi7Ei', 'admin');
