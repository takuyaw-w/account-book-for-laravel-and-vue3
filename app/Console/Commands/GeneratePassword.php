<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GeneratePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:pass {--L|lengths=8 : 文字列の長さ} {--Q|quantity=1 : 生成する量}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate password.';

    protected $regexp = "/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[!-~]{8,}/u";
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!$this->validate($this->options())) {
            echo "invalid options.";
            return 22;
        }

        $generatedNum = intval($this->option("quantity"));
        $length = intval($this->option("lengths"));
        $passwords = $this->generatePassword($length, $generatedNum);
        $this->render($passwords);
        return 0;
    }

    private function validate(array $options): bool
    {
        if(!ctype_digit($options["quantity"]) || !ctype_digit($options["lengths"])) {
            return false;
        }

        if (intval($options["lengths"]) < 8) {
            return false;
        }
        return true;
    }

    private function generatePassword(int $length, int $generatedNum): array
    {
        $passwords = [];
        while(count($passwords) < $generatedNum) {
            $seed = \Str::random($length);
            if (preg_match($this->regexp, $seed)) {
                $hash = \Hash::make($seed);
                $passwords[$seed] = $hash;
            }
        }
        return $passwords;
    }

    private function render(array $passwords): void
    {
        echo "seed\thash\n";
        foreach ($passwords as $key => $val) {
            echo "$key\t$val\n";
        }
    }
}
