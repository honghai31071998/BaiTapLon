<?php
namespace Aws\GuardDuty;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon GuardDuty** service.
 * @method \Aws\Result acceptInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptInvitationAsync(array $args = [])
 * @method \Aws\Result archiveFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise archiveFindingsAsync(array $args = [])
 * @method \Aws\Result createDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDetectorAsync(array $args = [])
 * @method \Aws\Result createFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFilterAsync(array $args = [])
 * @method \Aws\Result createIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \Aws\Result createMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMembersAsync(array $args = [])
 * @method \Aws\Result createSampleFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSampleFindingsAsync(array $args = [])
 * @method \Aws\Result createThreatIntelSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThreatIntelSetAsync(array $args = [])
 * @method \Aws\Result declineInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDetectorAsync(array $args = [])
 * @method \Aws\Result deleteFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFilterAsync(array $args = [])
 * @method \Aws\Result deleteIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \Aws\Result deleteInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMembersAsync(array $args = [])
 * @method \Aws\Result deleteThreatIntelSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThreatIntelSetAsync(array $args = [])
 * @method \Aws\Result disassociateFromMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromMasterAccountAsync(array $args = [])
 * @method \Aws\Result disassociateMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMembersAsync(array $args = [])
 * @method \Aws\Result getDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDetectorAsync(array $args = [])
 * @method \Aws\Result getFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFilterAsync(array $args = [])
 * @method \Aws\Result getFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \Aws\Result getFindingsStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsStatisticsAsync(array $args = [])
 * @method \Aws\Result getIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \Aws\Result getInvitationsCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvitationsCountAsync(array $args = [])
 * @method \Aws\Result getMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMasterAccountAsync(array $args = [])
 * @method \Aws\Result getMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMembersAsync(array $args = [])
 * @method \Aws\Result getThreatIntelSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThreatIntelSetAsync(array $args = [])
 * @method \Aws\Result inviteMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteMembersAsync(array $args = [])
 * @method \Aws\Result listDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDetectorsAsync(array $args = [])
 * @method \Aws\Result listFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFiltersAsync(array $args = [])
 * @method \Aws\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \Aws\Result listIPSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \Aws\Result listInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \Aws\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \Aws\Result listThreatIntelSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThreatIntelSetsAsync(array $args = [])
 * @method \Aws\Result startMonitoringMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMonitoringMembersAsync(array $args = [])
 * @method \Aws\Result stopMonitoringMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMonitoringMembersAsync(array $args = [])
 * @method \Aws\Result unarchiveFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unarchiveFindingsAsync(array $args = [])
 * @method \Aws\Result updateDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDetectorAsync(array $args = [])
 * @method \Aws\Result updateFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFilterAsync(array $args = [])
 * @method \Aws\Result updateFindingsFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFindingsFeedbackAsync(array $args = [])
 * @method \Aws\Result updateIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \Aws\Result updateThreatIntelSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThreatIntelSetAsync(array $args = [])
 */
class GuardDutyClient extends AwsClient {}
