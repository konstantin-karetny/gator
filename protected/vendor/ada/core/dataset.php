<?php

namespace Ada\Core;

class DataSet extends Proto
{
    protected
        $data;

    public static function init(Type\Arr $data = null)
    {
        return new static($data);
    }

    protected function __construct(Type\Arr $data = null)
    {
        $this->data = $data ?: Type\Arr::init();
    }

    public function getCmd(Type\Cmd $name): Type\Cmd
    {
        return Type\Cmd::init((string) $this->toArray()[$name->res()]);
    }

    public function set(Type\Cmd $name, $value): array
    {

    }

    public function toArray(): array
    {
        return $this->data;
    }
}
