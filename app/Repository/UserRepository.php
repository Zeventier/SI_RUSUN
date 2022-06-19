<?php

namespace Project\Repository;

use Project\Domain\User;

class UserRepository {
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User
    {
        $statement = $this->connection->prepare("INSERT INTO akun(username, password, status) VALUES (?, ?, ?)");
        $statement->execute([
            $user->username, $user->password, $user->status
        ]);
        return $user;
    }

    public function update(User $user): User
    {
        $statement = $this->connection->prepare("UPDATE akun SET status = ?, password = ? WHERE id = ?");
        $statement->execute([
            $user->status, $user->password, $user->username
        ]);
        return $user;
    }

    public function findById(?string $id): ?User
    {
        $statement = $this->connection->prepare("SELECT username, password, status FROM akun WHERE username = ?");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $user = new User();
                $user->username = $row['username'];
                $user->password = $row['password'];
                $user->status = $row['status'];
                return $user;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($username)
    {
        $statement = $this->connection->prepare("DELETE FROM akun WHERE username = ?");

        return $statement->execute([$username]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE from akun");
    }
}