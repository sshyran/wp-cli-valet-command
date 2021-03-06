<?php

namespace WP_CLI_Valet\Process;

class SystemValet extends ShellCommand implements ValetInterface
{
    protected $command = 'valet';

    /**
     * Get the local domain served by Valet.
     *
     * @return string
     */
    public function domain()
    {
        return trim($this->run('domain')->stdout);
    }

    /**
     * Secure the installation with a self-signed TLS certificate.
     *
     * @param string $domain
     *
     * @return mixed
     */
    public function secure($domain)
    {
        return $this->run('secure', [$domain]);
    }

    /**
     * Remove any Valet self-signed TLS certificate for this installation.
     *
     * @param string $domain
     *
     * @return mixed
     */
    public function unsecure($domain)
    {
        return $this->run('unsecure', [$domain]);
    }
}
