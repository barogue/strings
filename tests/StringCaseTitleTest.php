<?php

namespace Barogue\Strings\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_title
 *
 * @group case
 * @group str_case_title
 */
class StringCaseTitleTest extends TestCase
{
    public static function provideCases(): array
    {
        return [
            ['simple', 'Simple'],
            ['Simple', 'Simple'],
            ['SIMPLE', 'Simple'],

            ['simple123', 'Simple123'],
            ['Simple123', 'Simple123'],
            ['SIMPLE123', 'Simple123'],

            ['simpleTest', 'Simple Test'],
            ['SimpleTest', 'Simple Test'],
            ['simpleTEST', 'Simple Test'],
            ['SIMPLETest', 'Simple Test'],

            ['simple123Test', 'Simple123 Test'],
            ['Simple123Test', 'Simple123 Test'],
            ['simple123TEST', 'Simple123 Test'],
            ['SIMPLE123Test', 'Simple123 Test'],

            ['simpleXML', 'Simple Xml'],
            ['SimpleXML', 'Simple Xml'],
            ['SimpleXml', 'Simple Xml'],

            ['aTest', 'A Test'],
            ['ATest', 'A Test'],
            ['ATeSt', 'A Te St'],

            ['beginningMiddleEnd', 'Beginning Middle End'],
            ['BeginningMiddleEnd', 'Beginning Middle End'],
            ['BeginningMIDDLEEnd', 'Beginning Middle End'],
            ['BEGINNINGMiddleEnd', 'Beginning Middle End'],
            ['BEGINNINGMiddleEND', 'Beginning Middle End'],

            ['fromCamelCaseFormat', 'From Camel Case Format'],
            ['FromPascalCaseFormat', 'From Pascal Case Format'],
            ['from_snake_case_format', 'From Snake Case Format'],
            ['from-kebab-case-format', 'From Kebab Case Format'],
        ];
    }

    /**
     * @dataProvider provideCases
     *
     * @param string $from
     * @param string $to
     */
    public function testCases($from, $to)
    {
        $this->assertSame($to, str_case_title($from));
    }
}
