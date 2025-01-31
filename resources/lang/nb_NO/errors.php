<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III kan ikke finne denne siden.',
    '404_page_does_not_exist' => 'Siden du ba om, finnes ikke. Sjekk at du ikke har skrevet feil URL. Har du gjort en skrivefeil?',
    '404_send_error'          => 'Hvis du ble omdirigert til denne siden automatisk, da må vi beklage. Det er nevnt i denne feilen i loggfilene og jeg vil være takknemlig hvis du vil sende den til meg.',
    '404_github_link'         => 'Hvis du er sikker på at denne siden skal eksistere, åpne en sak på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Uff da',
    'fatal_error'             => 'Det oppstod en alvorlig feil. Vennligst sjekk loggfilene i "lagring/logg" eller bruk "docker logger -f [container]" for å se hva som skjer.',
    'maintenance_mode'        => 'Firefly III er i vedlikeholdsmodus.',
    'be_right_back'           => 'Er straks tilbake!',
    'check_back'              => 'Firefly III er nede for nødvendig vedlikehold. Vennligst sjekk tilbake om en stund.',
    'error_occurred'          => 'Beklager, en feil har oppstått.',
    'error_not_recoverable'   => 'Dessverre ble ikke denne feilen fikset :(. Firefly III ødelagt. Feilen er:',
    'error'                   => 'Feil',
    'error_location'          => 'Denne feilen oppstod i filen <span style="font-family: monospace;">:file</span> på linje :line med kode :code.',
    'stacktrace'              => 'Stack Trace',
    'more_info'               => 'Mer informasjon',
    'collect_info'            => 'Samle inn mer informasjon i <code>lagring/logger</code> mappen hvor du finner loggfiler. Hvis du kjører Docker, bruk <code>docker logger -f [container]</code>.',
    'collect_info_more'       => 'Du kan lese mer om innsamling av feilinformasjon i <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">FAQ</a>.',
    'github_help'             => 'Få hjelp på GitHub',
    'github_instructions'     => 'Du er mer enn velkommen til å åpne et nytt problem <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'              => 'Bruk søket!',
    'include_info'            => 'Inkluder informasjonen <a href=":link">fra denne feilsøkingssiden</a>.',
    'tell_more'               => 'Si oss mere enn det som sier Whoops!"',
    'include_logs'            => 'Inkluder feillogger (se ovenfor).',
    'what_did_you_do'         => 'Fortell oss hva du gjorde.',
    'offline_header'          => 'Du er sannsynligvis frakoblet',
    'offline_unreachable'     => 'Firefly III er ikke tilgjengelig. Enheten er frakoblet eller serveren fungerer ikke.',
    'offline_github'          => 'Hvis du er sikker på at både enheten og serveren er online, åpne en sak på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
