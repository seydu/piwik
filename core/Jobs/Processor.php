<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace Piwik\Jobs;

/**
 * TODO
 */
interface Processor
{
    /**
     * TODO
     */
    public function setOnJobsStartingCallback($onJobsStartedCallback);

    /**
     * TODO
     */
    public function setOnJobsFinishedCallback($onJobsFinishedCallback);

    /**
     * TODO
     */
    public function startProcessing($finishWhenNoJobs);

    /**
     * TODO
     */
    public function stopProcessing();
}