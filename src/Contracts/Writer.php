<?php
/*
 * Copyright (c) 2021 NobiDev
 */

declare(strict_types=1);

namespace NobiDev\EnvManager\Contracts;

/**
 * Interface Writer
 * @package NobiDev\EnvManager\Contracts
 */
interface Writer
{
    public function setBuffer(string $content): Writer;

    public function getBuffer(): string;

    public function appendEmptyLine(): Writer;

    /** @noinspection PhpMethodNamingConventionInspection */
    public function appendCommentLine(string $comment): Writer;

    public function appendSetter(string $key, string $value = null, string $comment = null, bool $export = false): Writer;

    public function updateSetter(string $key, string $value = null, string $comment = null, bool $export = false): Writer;

    public function deleteSetter(string $key): Writer;

    public function save(string $filePath): Writer;
}
