<?php

namespace Fabric\Contract;

use Fabric\Contract\Exception\TemplateNotFound;

interface TemplateLoaderInterface
{
    /**
     * Find a template and return its content
     *
     * @param string $templateName The name of the template. Usually something like: product/view.tpl
     * @return string              The body of the template
     * @throws TemplateNotFound
     */
    public function load(string $templateName): string;
}
