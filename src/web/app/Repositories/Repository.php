<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Repository
{
    public function __construct(
        protected Model $model,
    ) {}

    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function findOrFail(int $id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $record = $this->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete(int $id): void
    {
        $this->findOrFail($id)->delete();
    }
}
