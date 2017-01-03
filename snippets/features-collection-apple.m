#import "Vero.h"

- (void) doSomething {
  Vero *vero = [[Vero alloc] init];
  vero.authToken = @"yourVeroAuthToken";

  NSDictionary* me = [NSDictionary dictionaryWithObjectsAndKeys:
                     @"james@getvero.com", @"id",
                     [NSNumber numberWithBool:true], @"awesome", nil];
  NSDictionary* data = [NSDictionary dictionaryWithObjectsAndKeys: @"iphone", @"source", nil];

  [vero eventsTrack:@"Signed up" identity:me data:data developmentMode:false];
}