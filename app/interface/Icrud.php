<?php

interface Icrud
{
    public function store($request);
    public function update($request);
    public function delete($request);
    public function search($request);

}
