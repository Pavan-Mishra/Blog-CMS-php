
CREATE DATABASE IF NOT EXISTS blog_cms;
USE blog_cms;

CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO posts (title, content) VALUES
('Hello World', 'This is the first post. Welcome to the blog!'),
('Second Post', 'Here is another post for testing.');
